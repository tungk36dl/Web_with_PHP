<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

require_once "../app/Database.php";
require_once "../app/helpers/Helpers.php";
require_once "../vendor/autoload.php";

$rqUri = $_SERVER['REQUEST_URI'];



require_once "../app/helpers/auth.php";

if(!auth::authorization($rqUri)){
    return;
}

//Tên route: nếu giống nhau phần đầu, thì các route dài hơn được đặt ở trên để được xử lý đúng
$routes = [

    '/login' =>  [LoginController::class, 'login'],
    '/registration' =>  [LoginController::class, 'registration'],

    '/logout' =>  [LoginController::class, 'logout'],

    '/member' => [MemberController::class, 'index'],
    
    '/admin/feetbacks' => [FeetbackController::class, 'list'],


    '/admin/users/delete' => [UserController::class, 'delete'],
    '/admin/users/add' => [UserController::class, 'add'],
    '/admin/users/edit' => [UserController::class, 'edit'],
    '/admin/users' => [UserController::class, 'list'],

    //CRUD:
    '/admin/products-cat/delete' => [ProductCatController::class, 'delete'],
    '/admin/products-cat/add' => [ProductCatController::class, 'add'],
    '/admin/products-cat/edit' => [ProductCatController::class, 'edit'],
    '/admin/products-cat' => [ProductCatController::class, 'list'],


    '/admin/products/delete' => [ProductController::class, 'delete'],
    '/admin/products/add' => [ProductController::class, 'add'],
    '/admin/products/edit' => [ProductController::class, 'edit'],
    '/admin/products' => [ProductController::class, 'list'],

    // '/admin/products' => [ProductController::class, 'list'],
    //CRUD:
    '/admin/news-cat/delete' => [NewsCatController::class, 'delete'],
    '/admin/news-cat/add' => [NewsCatController::class, 'add'],
    '/admin/news-cat/edit' => [NewsCatController::class, 'edit'],
    '/admin/news-cat' => [NewsCatController::class, 'list'],

    
    //CRUD:
    '/admin/news/delete' => [NewsController::class, 'delete'],
    '/admin/news/add' => [NewsController::class, 'add'],
    '/admin/news/edit' => [NewsController::class, 'edit'],
    '/admin/news' => [NewsController::class, 'list'],




    '/news' => [NewsPublicController::class, 'index'],
    '/admin' => [AdminController::class, 'index'],


    //CRUD:
    '/api/news/add' => [NewsController::class, 'add_api'],
    '/api/news/get' => [NewsController::class, 'get_api'],
    '/api/news/edit' => [NewsController::class, 'edit_api'],
    '/api/news/delete' => [NewsController::class, 'delete_api'],
    '/api/news' => [NewsController::class, 'list_api'],
    

    '/api/product/add' => [ProductController::class, 'add_api'],
    '/api/product/get' => [ProductController::class, 'get_api'],
    '/api/product/edit' => [ProductController::class, 'edit_api'],
    '/api/product/delete' => [ProductController::class, 'delete_api'],
    '/api/product' => [ProductController::class, 'list_api'],

    '/tin-tuc/tt' => [NewsDetailController::class, 'index'],
    '/tin-tuc' => [NewsPublicController::class, 'index'],




    '/san-pham/sp' => [ProductDetailController::class, 'index'],
    '/san-pham' => [ProductPublicController::class, 'index'],

    '/lien-he' => [ContactPublicController::class, 'index'],

    

    '/' => [HomeController::class, 'index'],
    // '/' => [ProductController::class, 'list'],
];

foreach($routes AS $uri => $arrayCtrl){


    $class = $arrayCtrl[0];
    $method = $arrayCtrl[1];

    $file = "../app/controllers/$class.php";


    if(str_starts_with($rqUri, $uri)){
         require_once $file;

         $GLOBALS['pageTitle'] = $class::$pageTitle ?? '';

         $obj = new $class;
         $obj->$method();
         
         break;
    }
}

if(str_starts_with($rqUri,"/api/")){
    die();
}

echo(" <!-- \n<hr/> DEBUG: URI = $rqUri ");
echo("\n<br/> Controller->Action: $class() -> $method() ");
echo "<pre> File includes: ";
print_r(get_included_files());
echo "</pre> -->";
//

