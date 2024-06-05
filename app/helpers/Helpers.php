<?php
class Helpers {

    static function buildSelectOptions($cats, $parentId = 0, $prefix = '', $val = null, $field = null) {
        $html = '';
        foreach ($cats as $category) { 
            // $html.= "category[field] = $category[$field]";
            if ($category[$field] == $parentId) {  // $parent = 0 là luôn tìm tới tk cha lớn nhất , vì cha lớn nhất có parent -= 0
                $selected = '';
                if($category['id'] == $val)
                    $selected = 'selected';
                $html .= '
                <option '.$selected.' value="' . $category['id'] . '">' . $prefix . $category['name'] . '</option>';
                $html .= self::buildSelectOptions($cats, $category['id'], $prefix . '--', $val, $field);
                
            }
        } 
        $html .= ''; 
        return $html;
    }


    static function phanCapTheLoai($cats, $parentId = 0, $prefix = '', $hrefFix = 'disabled' , $field = null) {
        $html = '';
        foreach ($cats as $category) {
            if ($category[$field] == $parentId) {
                $html .= '
                <li  class="cat-item cat-item-167" '. $prefix .'  value="'  . $category['id'] . '"> <a href=" /san-pham?id='. $category['id'] .'" '. $hrefFix.'>' . $category['name'] . '</a></li>';
                $html .= self::phanCapTheLoai($cats, $category['id'], $prefix . ' style="margin-left:20px;" ' , $hrefFix = '', $field);
                
            }
        }
        $html .= ''; 
        return $html;
    }

    // static function phanCapTheLoai($cats, $parentId = 0, $prefix = '', $field = null) {
    //     $html = '';
    //     foreach ($cats as $category) {
    //         if ($category[$field] == $parentId) {
    //             $html .= '
    //             <li  class="cat-item cat-item-167" '. $prefix .'  value="'  . $category['id'] . '"> <a href=" /san-pham?id='. $category['id'] .'">' . $category['name'] . '</a></li>';
    //             $html .= self::phanCapTheLoai($cats, $category['id'], $prefix . ' style="margin-left:20px;" ' , $field);
                
    //         }
    //     }
    //     $html .= ''; 
    //     return $html;
    // }

    static function phanCapMenu($cats, $parentId = 0, $prefix = '', $val = null, $field = null) {
        $html = '';
        foreach ($cats as $category) {
            if ($category[$field] == $parentId) {
                $selected = '';
                // if($category['id'] == $val)
                //     $selected = 'selected';
                $html .= '
                <option '.$selected.' value="' . $category['id'] . '">' . $prefix . $category['name'] . '</option>';
                $html .= self::phanCapMenu($cats, $category['id'], $prefix . '--', $val, $field);
                
            }
        }
        $html .= ''; 
        return $html;
    }


    // static function createMenu($menus) {
    //     // Tạo mảng parents
    //     $parents = [];
    //     foreach ($menus as $menu) {
    //       $parents[$menu['id']] = $menu['parent'];
    //     }
      
    //     // Duyệt qua mảng menus, cập nhật mảng parents
    //     // foreach ($menus as $menu) {
    //     //   $parent_id = $menu['parent'];
    //     //   if ($parent_id) {
    //     //     $parents[$menu['id']] = $parents[$parent_id];
    //     //   }
    //     // }

    //     // echo '<pre>';
    //     // print_r($menus);
    //     // echo '</pre>';
        

    //     // echo '<pre>';
    //     // print_r($parents);
    //     // echo '</pre>';

    //     // die('123');
        
      
    //     // Tạo menu phân cấp
    //     return self::createMenuRecursive($menus, $parents) ;
    //   }

    static function createMenuRecursive($menus, $parents, $level = 0) {
        // Xử lý trường hợp cuối
        if (empty($menus)) {
          return;
        }
      
        // Xử lý cấp 1
        foreach ($menus as $menu) {
          echo "<li class='level-$level'><a href=''>{$menu['name']}</a>";
      
          // Xử lý cấp 2
          if ($parents[$menu['id']] != $menu['id']) {
            echo self::createMenuRecursive($menus, $parents, $level + 1);
          }
      
          echo "</li>";
        }
      }



      static function show_menu_recusive_2020($arrObj, $parent , $level = 0){

        $strRet = '';
        if (count($arrObj) < 1)
            return null;
    
        $baseUrl = '#';
    
        if(!$level)
            $level = 1;
        $level++;
        $levelUl = $level+1;
    
        //Duyet tat ca mang
        foreach ($arrObj as $key0 => $objMenu0) {
            $countChild = 0;
            $id = $objMenu0['id'];
            //Neu co parent, thi xet
            if ($objMenu0['parent'] <> $parent) {
                //  echo " ->bo qua";
                continue;
            }
            //Xem phan tu hien tai co child khong
            foreach ($arrObj as $key1 => $objMenu1)
                if ($objMenu1['parent'] == $id && $objMenu1['id'] <> $id) {
                    $countChild++;
                    break;
                }
    
            //Neu ko co con thi in ra luon
            if ($countChild == 0) {
                $strRet.= "\n<li class=''> <a class=\"menu-link$level\" href='/san-pham?id=$objMenu0[id]'>  $objMenu0[name]</a> \n</li> ";
                // echo "<br/>  $objMenu0->name  ( KO CO Child?) \n</li> ";
                $objMenu0['id'] = -1;
                continue;
            }
    
            // $strRet.= "\n<ul class='level$level'>";
    
            $strRet.= "\n<li class=''> <a class=\"menu-link$level\" href='$baseUrl'>   $objMenu0[name]   </a> ";
            $strRet .= "\n<span class='sub-icon$level'>+</span>";
            $strRet.= "\n<ul class='level$levelUl'>";
    
            $parentNext = $objMenu0['id'];
    
            $strRet.= self::show_menu_recusive_2020($arrObj, $parentNext, $level);
    
            $strRet.= "\n</ul>";
            $strRet.= "\n</li>";

            // $strRet.= "\n</ul>";


        }
    
        return $strRet;
    
    }
    

}


