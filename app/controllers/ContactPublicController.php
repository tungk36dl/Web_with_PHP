<?php
require_once 'BaseController.php';
require_once '../app/models/Product.php';
require_once '../app/models/ProductCat.php';
require_once '../app/models/Feetback.php';
class ContactPublicController extends BaseController
{
    static $model = Product::class;
    static $modelCat = ProductCat::class;

    static $modelFb = Feetback::class;



    function index(){

        $error = '';
        try{
            //sort_by=username&sort_type=asc
            $sort_by = $_GET['sort_by'] ?? null;
            $sort_type = $_GET['sort_type'] ?? null;

            $search_value = $_GET['search_value'] ?? '';

            $search_valueCat = $_GET['id'] ?? null;

            
            //Limit/Offset 
            $page = $_GET['page'] ?? 1;
            $limit = 20 ;
            $param = [
                '$search_valueCat'=> $search_valueCat,
                'page'=>$page, 
                'limit' => $limit,
                'sort_by' => $sort_by,
                'sort_type' => $sort_type,
                'search_value'=> $search_value,
            
            ];
            $paramCat = [
                'page'=>$page, 
                'limit' => $limit,
                'sort_by' => $sort_by,
                'sort_type' => $sort_type,
                'search_value'=> $search_value,
            
            ];

            
            $data = static::$model::list($param);

            $dataCatSanpham = static::$modelCat::list($paramCat);


            if($_POST){
                // die('123');
                 $ret = Feetback::add($_POST);                    
            }


            // $total = static::$model::count($param);


            // $nPage = ceil($total / $limit);


            
        //Bắt lỗi lớp Exception là mọi loại lỗi, kể cả PDOException
        } catch (Exception $e) {
            http_response_code(500);
            $error =  "Có lỗi: " . $e->getMessage() . " \n". $e->getTraceAsString();    
        }

        $modelClass = static::$model;
            
        $controllerClass = static::class;
        
        // Gọi view để hiển thị trang chu
        require_once "../app/views/contact/index.php";

    }

    
}