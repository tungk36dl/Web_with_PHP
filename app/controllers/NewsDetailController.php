<?php
require_once 'BaseController.php';
require_once '../app/models/News.php';
require_once '../app/models/NewsCat.php';
require_once '../app/models/ProductCat.php';
require_once '../app/models/Product.php';


class NewsDetailController extends BaseController
{
    static $model = News::class;
    static $modelCat = NewsCat::class;

    static $modelCatSp = ProductCat::class;


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

            $dataCat = static::$modelCat::list($paramCat);

            $dataCatSanpham = static::$modelCatSp::list($paramCat);



            // $total = static::$model::count($param);


            // $nPage = ceil($total / $limit);


            
        //Bắt lỗi lớp Exception là mọi loại lỗi, kể cả PDOException
        } catch (Exception $e) {
            http_response_code(500);
            $error =  "Có lỗi: " . $e->getMessage() . " \n". $e->getTraceAsString();    
        }

        $modelClass = static::$model;
            
        $controllerClass = static::class;
        

        require_once "../app/views/news/newsDetail.php";

    }

    
}