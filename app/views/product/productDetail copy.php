<?php
require_once "../templates/productDetail/header.php";
?>

<?php
// if($data) {

//     echo('12454567435346');
// }

$idSp = $_GET['idSp'] ?? '';

// echo ('$idSp=' . $idSp);

?>


<style>
    .title_name{
        margin-top: 50px;
    }
</style>


<section class="product_detail container clearfix fixed-height mb24">
    <?php
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

    ?>

    <?php
    foreach ($data as $one) {
        if ($one['id'] == $idSp) {
    ?>
            <h1 class="title_name d-md-none"><?php echo $one['name'] ?></h1>
            <div class="product-info row mb20">
                <div class="col_left col-md-6">
                    <div class="PD_Media">
                        <div id="lightgallery" class="lightgallery swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide item" data-src="<?php echo $one['thumb'] ?>" data-sub-html="<p>Mô tả của ảnh số 1</p>">
                                    <div class="swiper-slide-container">
                                        <div class="ava">
                                            <img class="zoom_01" src="<?php echo $one['thumb'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide item" data-src="   <?php
                                                                            if ($one['images']) {
                                                                                echo ("\n <br> ");
                                                                                $mImg = explode("\n", $one['images']);
                                                                                if ($mImg) {
                                                                                    echo $mImg[0];
                                                                                }
                                                                            }

                                                                            ?>" data-sub-html="<p>Mô tả của ảnh số 2</p>" style="width: 370px;">
                                    <div class="swiper-slide-container">
                                        <div class="ava">
                                            <img src="   <?php
                                                            if ($one['images']) {
                                                                echo ("\n <br> ");
                                                                $mImg = explode("\n", $one['images']);
                                                                if ($mImg) {
                                                                    echo $mImg[0];
                                                                }
                                                            }

                                                            ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <div class="video-container" style="display: block;">
                                            <div class="thumb_img video-wrap">
                                                <video id="videoPlayer" class="video">
                                                    <source src="https://d2y5sgsy8bbmb8.cloudfront.net/36eeeaa4-0ffa-4751-a854-d4d5c9f3a06a/default.jobtemplate.mp4.480.mp4" type="video/mp4">
                                                </video>
                                                <div class="playpause">
                                                    <svg class="icon-svg">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#play2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide item" data-src="   <?php
                                                                            if ($one['images']) {
                                                                                echo ("\n <br> ");
                                                                                $mImg = explode("\n", $one['images']);
                                                                                if ($mImg) {
                                                                                    echo $mImg[1];
                                                                                }
                                                                            }

                                                                            ?>" data-sub-html="<p>Mô tả của ảnh số 3</p>" style="width: 370px;">
                                    <div class="swiper-slide-container">
                                        <div class="ava">
                                            <img src="   <?php
                                                            if ($one['images']) {
                                                                echo ("\n <br> ");
                                                                $mImg = explode("\n", $one['images']);
                                                                if ($mImg) {
                                                                    echo $mImg[1];
                                                                }
                                                            }

                                                            ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide item" data-src=" <?php if ($one['images']) {
                                                                                echo ("\n <br> ");
                                                                                $mImg = explode("\n", $one['images']);
                                                                                if ($mImg) {
                                                                                    echo $mImg[2];
                                                                                }
                                                                            } ?>" data-sub-html="<p>Mô tả của ảnh số 4</p>" style="width: 370px;">
                                    <div class="swiper-slide-container">
                                        <div class="ava">
                                            <img src="<?php if ($one['images']) {
                                                            echo ("\n <br> ");
                                                            $mImg = explode("\n", $one['images']);
                                                            if ($mImg) {
                                                                echo $mImg[2];
                                                            }
                                                        } ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">

                                <?php
                                if ($one['images']) {
                                    echo ("\n <br> ");
                                    $mImg = explode("\n", $one['images']);
                                    $countImg = count($mImg) - 1;
                                    if ($countImg < 5) {
                                        $addImg = (6 - $countImg);
                                        for ($i = 0; $i <= $addImg; $i++) {
                                            array_push($mImg, '/images/slide/group21.png');
                                        }
                                    }
                                }

                                // print_r($mImg);
                                ?>

                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <img src="<?php echo $mImg[0] ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <img src="<?php echo $mImg[1] ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <img src="<?php echo $mImg[2] ?>" alt="">
                                        <span class="play-icon">
                                            <svg class="icon-svg">
                                                <use xlink:href="#play2"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <img src="<?php echo $mImg[3] ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container">
                                        <img src="<?php echo $mImg[4] ?>" alt="">
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                                </svg>
                            </div>
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">
                                <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tt_sp_chitiet">
                    <h1 class="title_name d-md-block d-none"> <?php echo $one['name'] ?></h1>
                    <div class="sidebar_1_head flex">
                        <div class="ct_star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="ct_danhgia">
                            <a href="">(Xem 100 đánh giá)</a> 3500 đã mua
                        </div>
                    </div>
                    <div class="ct_price">
                        <div class="price-old">
                            Giá gốc: <span>30 000 000 đ</span> <strong>Giảm 20%</strong>
                        </div>
                        <div class="price">
                            Giá về tay: <strong> <?php echo  number_format($one['price'], 0, '.', ' '); ?> đ</strong>
                        </div>
                    </div>
                    <div class="description">
                        <ul>
                            <li>Thể loại :
                                <?php
                                if ($dataCatSanpham) {
                                    foreach ($dataCatSanpham as $oneCat) {
                                        if ($one['cat_id'] == $oneCat['id']) {
                                            echo '<span class="" >' . $oneCat['name'] . '</span>';
                                        }
                                    }
                                }
                                ?>
                            </li>
                            <li>Mã sản phẩm : <?php echo $one['id'] ?></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="ct_quantity">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn  btn-number" data-type="minus" data-field="">
                                    <svg class="icon-svg">
                                        <use xlink:href="#Minus"></use>
                                    </svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                    <svg class="icon-svg">
                                        <use xlink:href="#Plus"></use>
                                    </svg>
                                </button>
                            </span>
                        </div>
                        <button type="submit" name="add-to-cart" value="3333" class="single_add_to_cart_button btn-green btn">Tư vấn ngay</button>
                    </div>

                    <div class="product_meta">
                        <span class="sku_wrapper">Mã: <span class="sku"> 17<?php echo $one['id'] ?> </span></span>
                        <span class="posted_in">Danh mục:
                            <a href="/san-pham?id=<?php echo $one['cat_id'] ?>" rel="tag">
                                <?php
                                if ($dataCatSanpham) {
                                    foreach ($dataCatSanpham as $oneCat) {
                                        if ($one['cat_id'] == $oneCat['id']) {
                                            echo '<span class="" >' . $oneCat['name'] . '</span>';
                                        }
                                    }
                                }
                                ?>
                            </a></span>
                    </div>
                    <div class="product_social">
                        <a href="">
                            <svg class="icon-svg">
                                <use xlink:href="#Facebook"></use>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="icon-svg">
                                <use xlink:href="#Twitter"></use>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="icon-svg">
                                <use xlink:href="#twitter2"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-content">
                <div class="product-section">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="title uppercase medium">Mô tả</h5>
                        </div>

                    </div>
                </div>
                <div class="product-section">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="title uppercase medium">Đánh giá</h5>
                        </div>

                    </div>
                </div>

            </div>

    <?php
        }
    }
    ?>
    <div class="list-product list-product_new">
        <div class="title-main">
            <span>SẢN PHẨM TƯƠNG TỰ</span>
        </div>
        <div class="row">

            <?php
            if ($data) {
                $cat_id = 0;
                foreach ($data as $one) {
                    if ($one['id'] == $idSp) {
                        $cat_id = $one['cat_id'];
                    }
                }

                foreach ($data as $one) {
                    if ($one['cat_id'] == $cat_id) {
                        if ($one['id'] == $idSp) {
                            continue;
                        }


            ?>
                        <div class="col-lg-3 col-sm-6 mb20">
                            <div class="product-small">
                                <div class="gift-sale">
                                    <div class="sale">-5%</div>
                                    <div class="code">Quà tặng 600K</div>
                                </div>
                                <div class="box-image">
                                    <a href="/san-pham/sp?idSp=<?php echo $one['id'] ?>">
                                        <img src="<?php echo $one['thumb'] ?>">
                                    </a>
                                </div>
                                <div class="box-text">
                                    <div class="note">Sản phẩm sắt mỹ nghệ</div>
                                    <h3><a href=""><?php echo $one['name'] ?></a></h3>
                                    <div class="ct_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>

                                    </div>
                                    <div class="price">
                                        <div class="old">480 000 đ</div>
                                        <div class="new"><?php echo number_format($one['price'], 0, '.', ' ') ?> ₫</div>
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


</section>
<?php
require_once "../templates/productDetail/footer.php";
?>