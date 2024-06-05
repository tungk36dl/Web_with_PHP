<?php
class BaseModel{

    static $table;

    static $fillable;
    static $search_field;
    static $search_cat;
    static $sort_field;
    static $indexListField;
    static $metaFieldName;
    static $metaFieldType;
    static $nameView;
    public static function validation($param){
        // if($username = ($param['username'] ?? '')){
        //     //Kiem tra username
        //     if(strlen($username) > 20 || strlen($username) <8 ){
        //         throw new Exception("Username khong hop le!");
        //     }
        //     //a-z,0 9
        //     //Preg: bieu thuc chinh quy 
        //     if(!preg_match('/^[a-z0-9]\w{6,20}[^_]$/i', $username)) {
        //         throw new Exception("Username khong hop le!");
        //     }

        //     $email = ($param["email"]) ?? '';
        //     if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         throw new Exception("Email khong hop le!");
        //     }
        // }
    }

    public static function delete($id)
    {
        $table = static::$table;

        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM $table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function add($params)
    {

        static::validation($params);

        $table = static::$table;

        $conn = Database::getConnection();

        $fillable = static::$fillable;

        // $params['name'];
        // $params['cat_id'];
        // $params['description'];
        // $params['detail'];
        // $params['price'];
        
        $strField = '';
        $strBind = '';
        $arrBind = [];
        //['name','cat_id','description','detail', 'price']
        foreach($fillable AS $field){
            $strField .= "$field,";
            $strBind .= ":$field,";
            $arrBind[$field] = $params[$field] ?? null;
        }
        //name,cat_id,description,detail,price
        $strField = trim($strField, ',');
        //:name,:cat_id,:description,:detail,:price
        $strBind = trim($strBind, ',');

        // $username = $params['username'];
        // $email = $params['email'];
        // $password = $params['password'];


        //name,cat_id,description,detail,price
        $stmt = $conn->prepare("INSERT INTO $table ($strField) 
        VALUES ($strBind)");


        $config = HTMLPurifier_Config::createDefault();
        // configuration goes here:
        $config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
        $config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype
        //Cho phép img datasrc base64
        $config->set('URI.AllowedSchemes', array('data' => true));

        $purifier = new HTMLPurifier($config);
        

        foreach($arrBind AS $field => $val){
            //$stmt->bindParam(":$field", $val);
            //Tạm thời disable để có thể add link youtube
           // $val = $purifier->purify($val);

            $stmt->bindValue(":$field", $val);
            // $stmt->bindParam(':username', $username);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':password', $password); //Password có thể cần thêm băm để bảo mật
        }


        if($stmt->execute())
            return $conn->lastInsertId();
        return null;
    }


    public static function save($id, $params)
    {

        if(!is_numeric($id))
            throw new Exception("Save: Not valid id!");

        static::validation($params);


        $table = static::$table;

        $conn = Database::getConnection();

        $fillable = static::$fillable;

        // $params['name'];
        // $params['cat_id'];
        // $params['description'];
        // $params['detail'];
        // $params['price'];

        // echo "<pre>";
        // print_r($params);
        // echo "</pre>";
        
        $strField = '';
        $arrBind = [];
        //['name','cat_id','description','detail', 'price']
        foreach($fillable AS $field){
            if(!isset($params[$field]))
                continue;
            $strField .= "$field=:$field,";
            $arrBind[$field] = $params[$field];
        }

        // echo "<pre>";
        // print_r($arrBind);
        // echo "</pre>";
        //name,cat_id,description,detail,price
        $strField = trim($strField, ',');

        // $username = $params['username'];
        // $email = $params['email'];
        // $password = $params['password'];


        
        $config = HTMLPurifier_Config::createDefault();
        // configuration goes here:
        $config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
        $config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype
        //Cho phép img datasrc base64
        $config->set('URI.AllowedSchemes', array('data' => true));

        //For embed youtube
//        $config->set('HTML.SafeIframe', true);
		//$config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%'); //allow YouTube and Vimeo
        //$config->set('Filter.YouTube', true);

		
        // $config->set('HTML.SafeIframe', true);
        // $config->set('URI.SafeIframeRegexp', '%^(https?:)?(\/\/www\.youtube(?:-nocookie)?\.com\/embed\/|\/\/player\.vimeo\.com\/)%');
        
        $purifier = new HTMLPurifier($config);


        //$stmt = $conn->prepare("UPDATE $table SET username = :username, email=:email, password=:password WHERE id=:id");
        // name=:name,cat_id=:cat_id ...
        $stmt = $conn->prepare("UPDATE $table SET $strField WHERE id=$id");
        foreach($arrBind AS $field => $val){
            //Tạm thời disable để có thể add link youtube
            //$val = $purifier->purify($val);
            //$stmt->bindParam(":$field", $val);
            $stmt->bindValue(":$field", $val);
        }
        // $stmt->bindParam(':id', $id);
        // $stmt->bindParam(':username', $username);
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':password', $password); //Password có thể cần thêm băm để bảo mật

        
        // echo "<pre>";
        // print_r($stmt->debugDumpParams());
        // echo "</pre>";

        return $stmt->execute();
    }

    public static function get($id)
    {
        $table = static::$table;

        $conn = Database::getConnection();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        $stmt = $conn->prepare("SELECT * FROM $table WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ret = $stmt->fetchAll();
        if ($ret)
            return $ret[0];
        return null;
    }

    public static function count($param = null)
    {
        $table = static::$table;

        $conn = Database::getConnection();

        $sql = "SELECT count(*) AS c FROM $table";

        $search_field = static::$search_field;
    
        $search_value = $param['search_value'];
        $searchString = null;
        if($search_value){
            $searchString = " WHERE $search_field LIKE :search_value ";            
            $sql = "SELECT count(*) AS c FROM $table $searchString ";
        }        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        $stmt = $conn->prepare($sql);
        if($search_value){
            $search_value = "%$search_value%";
            $stmt->bindParam(':search_value', $search_value);
        }
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ret = $stmt->fetchAll();
        //        $stmt->debugDumpParams();

        return $ret[0]['c'];
    }

    public static function list($param = null)
    {

        $table = static::$table;
        $page = $param['page'] ?? 0;

        if($page <=1)
            $page = 1;

        //Page = 0 -> offset = 0,
        //Page = 1 -> offset = 5,
        //Page = 2 -> offset = 10,...
        $limit = $param['limit'] ?? 0;
        $offset = ($page - 1) * $limit;

        $sort_by = $param['sort_by'] ?? 'id';
        $sort_type = $param['sort_type'] ?? 'desc';
        $search_value = $param['search_value'] ?? '';
        // $search_valueCat = $param['$search_valueCat'] ?? '';

        $searchString = null;
        if($search_value){
            $searchString = " WHERE ".static::$search_field." LIKE :search_value ";
        }
        // if($search_valueCat){
        //     $searchString = " WHERE ".static::$search_cat." = $search_valueCat ";
        // }
        
        $sql = "SELECT * FROM $table $searchString LIMIT :limit OFFSET :offset";



        //if(in_array($sort_by, ['username', 'email']))
        if(in_array($sort_by, static::$sort_field) || $sort_by == 'id')
            if(in_array($sort_type, ['asc', 'desc']))
                $sql = "SELECT * FROM $table  $searchString ORDER BY $sort_by $sort_type LIMIT :limit OFFSET :offset";
        
        // echo "<pre>";
        // print_r($param);
        // echo "</pre>";
        // die($sql);

        $conn = Database::getConnection();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);

        if($search_value){
            $search_value = "%$search_value%";
            $stmt->bindParam(':search_value', $search_value);
        }
        // if($search_valueCat){
        //     // $search_valueCat = "%$search_valueCat%";
        //     $stmt->bindParam(':$search_valueCat', $search_valueCat);
        // }

        $stmt->execute();

        //$stmt->debugDumpParams();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ret = $stmt->fetchAll();
        return $ret;

  
    }


}