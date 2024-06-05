<?php 
    require_once 'BaseController.php';
    require_once '../app/models/Feetback.php';

class FeetbackController extends BaseController
{
    static public $model = Feetback::class;
    static public $adminUrl = "/admin/feetbacks";

    static public $pageTitle = "Phản hồi";



}



?>