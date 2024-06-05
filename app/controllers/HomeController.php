<?php
require_once '../app/models/Product.php';
require_once '../app/models/ProductCat.php';
require_once '../app/models/News.php';

class HomeController {


     static public $modelSanpham = Product::class;
     static public $modelCatSanpham = ProductCat::class;
     static public $modelTintuc = News::class;






    public function index() {
        

        $error = '';
        try{
            //sort_by=username&sort_type=asc
            $sort_by = $_GET['sort_by'] ?? null;
            $sort_type = $_GET['sort_type'] ?? null;

            $search_value = $_GET['search_value'] ?? '';

            
            //Limit/Offset 
            $page = $_GET['page'] ?? 1;
            $limit = 20 ;
            $param = ['page'=>$page, 
            'limit' => $limit,
            'sort_by' => $sort_by,
            'sort_type' => $sort_type,
            'search_value'=> $search_value,
            ];
            
            $dataSanpham = static::$modelSanpham::list($param);
            $totalSanpham = static::$modelSanpham::count($param);
            $nPageSanpham = ceil($totalSanpham / $limit);

            $dataCatSanpham = static::$modelCatSanpham::list($param);

            $dataTintuc = static::$modelTintuc::list($param);
            $totalTintuc = static::$modelTintuc::count($param);
            $nPagTintuc = ceil($totalTintuc / $limit);


            
        //Bắt lỗi lớp Exception là mọi loại lỗi, kể cả PDOException
        } catch (Exception $e) {
            http_response_code(500);
            $error =  "Có lỗi: " . $e->getMessage() . " \n". $e->getTraceAsString();    
        }

        $modelClass = static::$modelSanpham;
            
        $controllerClass = static::class;
        
     
        
        
        // Gọi view để hiển thị trang chu
        require '../app/views/homeIndex.php';
    }
}
