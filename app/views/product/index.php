<?php 
require_once "../templates/home/header.php";
?>

<style>
    .title{
        margin-top: -20px;
        color: #555555;
        font-size: 25px;
        font-weight: 500;
    }

    .myborder{
        padding: 8px 5px;
        margin-right: 0px;
        /* border: 2px solid #aca8a8; */
    }

    .img-zoom{
        transition: 1s ease;
    }

    .img-zoom:hover{
        transform: scale(1.3);
    }
</style>
    
    <section class="container clearfix fixed-height mb24">
    <div class="row page-title-inner align-center mb20">
        <div class="col-lg-6 mb20">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="#">Trang chủ</a></li> -->
                  <!-- <li class="breadcrumb-item active" aria-current="page">SẢN PHẨM CHĂM SÓC DA MAROSA</li> -->
                </ol>
            </nav>
        </div>
        <!-- <div class="sort-select col-lg-6 mb20">
            <a class="filter-control" href="javascript:;">
                <svg class="icon-svg">
                    <use xlink:href="/images/icons/icon.svg#filter"></use>
                </svg>
                <span>LỌC</span>
            </a>
            <div class="flex align-center">
                <span class="d-md-block d-none">Hiển thị tất cả 9 kết quả</span>
                <select class="form-control bg-agray">
					<option value="menu_order" selected="selected">Thứ tự mặc định</option>
					<option value="popularity">Thứ tự theo mức độ phổ biến</option>
					<option value="rating">Thứ tự theo điểm đánh giá</option>
					<option value="date">Mới nhất</option>
					<option value="price">Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
			</select>
            </div>
        </div> -->
    </div>

    <div class="row category-page-row">
        <div class="col-lg-3 myborder product_categories mb30">
            <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
            <div class="is-divider small"></div>

            <ul class="product-categories">
                <?php 
                    if($dataCatSanpham) {
                        echo $modelClass::_cat_id2($dataCatSanpham);

                    }
                ?>


            </ul>

            <!-- <span class="widget-title shop-sidebar">Lọc theo giá</span>
            <div class="is-divider small"></div> -->
            <!-- <div class="price-filter-container">
                <div id="slider-range"></div>
                <form>
                    <input type="hidden" name="min-value" value="">
                    <input type="hidden" name="max-value" value="">
                </form>
                <div class="row slider-labels">
                    <div class="col-6 mb15">
                        <div class="wrap">
                            <span id="slider-range-value1"></span> VNĐ
                        </div>

                    </div>
                    <div class="col-6 mb15">
                        <div class="wrap text-right">
                            <span id="slider-range-value2"></span> VNĐ
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-green btn">Lọc</button>
            </div> -->
        </div>
        <div class="col-lg-9">
            <p>
                <?php
                    if($dataCatSanpham) {
                        $idCat = $_GET['id'] ?? "";
                        $tam = 0;
                        foreach($dataCatSanpham as $one){
                            if($idCat == $one['id']){
                                echo '<h2 class="title" >' . $one['name'] . '</h2>';
                                $tam = 1;
                            }
                        }
                        if($tam == 0){
                            echo ('<h2 class="title" >Sản phẩm nghệ thuật </h2>');
                        }
                    }
                ?>
            </p>
            <hr width="400px">
            <br>
            <div class="list-product list-product_new">
                <div class="row">

                    <?php 
                        if($data && $dataCatSanpham) {

                            // echo '<pre>';
                            // print_r($data);
                            // echo '</pre>';

                            // echo '<pre>';
                            // print_r($dataCatSanpham);
                            // echo '</pre>';

                            $idCat = $_GET['id'] ?? "";
                            $listIdSp = array();
                            array_push($listIdSp, $idCat);
                            foreach($dataCatSanpham as $one){
                                if($one['parent'] == $idCat){
                                    array_push($listIdSp, $one['id']);
                                }
                            }
                            
                            // print_r($listIdSp);
                            

                            foreach($data as $one) {
                                    if($idCat == null || in_array($one['cat_id'], $listIdSp)) {

                                 

                    ?>

                    <div class="col-lg-4 col-sm-6 mb20">
                        <div class="product-small">
                            <div class="gift-sale">
                                <div class="sale">-5%</div>
                                <div class="code">Quà tặng 600K</div>
                            </div>
                            <div class="box-image">
                                <a href="/san-pham/sp?idSp=<?php echo $one['id']?>">
                                    <img class="img-zoom" src="<?php echo $one['thumb'] ?>">
                                </a>
                            </div>
                            <div class="box-text">
                                <div class="note">Sản phẩm sắt mỹ thuật</div>
                                <h3><a href="/san-pham/sp?idSp=<?php echo $one['id']?>"> <?php echo $one['name']; ?> </a></h3>
                                <div class="ct_star">
                                    <svg class="icon-us">
                                        <use xlink:href="/images/icons/icon.svg#star-full">
                                        </use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/images/icons/icon.svg#star-full">
                                        </use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/images/icons/icon.svg#star-full">
                                        </use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/images/icons/icon.svg#star-full">
                                        </use>
                                    </svg>
                                    <svg class="icon-us not">
                                        <use xlink:href="/images/icons/icon.svg#star-none">
                                        </use>
                                    </svg>
                                </div>
                                <div class="price">
                                    <div class="old">480.000 đ</div>
                                    <div class="new"><?php
                                        if (!is_null($one['price'])) {
                                            $price = $one['price'];
                                            echo  number_format($price, 0, '.', ' ');
                                        }
                                        ?>  ₫</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                                    
                                 }
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once "../templates/home/footer.php";
?>