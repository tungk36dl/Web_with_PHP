<?php

require_once "BaseModel.php";
// require_once "ProductCat.php";

class Feetback extends BaseModel
{

    static $table = 'feetbacks';

    static $search_field = 'name';
    // static $search_cat = 'cat_id';
    

    static $sort_field = ['name'];


    //Các field sẽ được add/save vào db:
    static $fillable = ['name','phone', 'content'];
    // static $fillable = ['name','cat_id', 'thumb' , 'images', 'description','detail', 'price'];


    ///
    static $indexListField = ['id','name','phone', 'content'];
  
    static $metaFieldName = [
        'id' => "Mã",
        'name'=>"Tên khách hàng",
        'phone'=>"Số điện thoại",
        'content'=>"Nội dung tư vấn",

    ];

    static $metaFieldType = [
        'content' => "textarea",
        //'password' => 'password',
        'detail' => "richtext",
        'description' => "textarea",
        'thumb' => 'image',
        'cat_id' => 'selectbox',
        'images' => 'multi_image',
    ];

}
