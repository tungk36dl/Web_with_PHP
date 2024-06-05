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
    .title_name {
        margin-top: 50px;
    }

    .btn-green a{
        color: white;
        text-decoration: none;
    }

    .product_social a:hover use{
        color: var(--color-text);
    }

    /* .icon-svg use:hover{
        color: var(--color-text);

    } */
</style>


<section class="product_detail container clearfix fixed-height mb24">
    <?php
        foreach ($data as $one) {
            if ($one['id'] == $idSp) {
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
                        <div class="swiper-slide item" data-src="<?php echo $mImg[0] ?>" data-sub-html="<p>Mô tả của ảnh số 2</p>">
                            <div class="swiper-slide-container">
                                <div class="ava">
                                    <img src="<?php echo $mImg[0] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <div class="video-container" style="display: block;">
                                    <div class="thumb_img video-wrap">
                                        <img src="/images/silde/group21.png" alt="">
                                        <!-- <video id="videoPlayer" class="video">
                                            <source src="https://d2y5sgsy8bbmb8.cloudfront.net/36eeeaa4-0ffa-4751-a854-d4d5c9f3a06a/default.jobtemplate.mp4.480.mp4" type="video/mp4">
                                        </video> -->
                                        <div class="playpause">
                                            <svg class="icon-svg">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#play2"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide item" data-src=" <?php echo $mImg[1] ?>" data-sub-html="<p>Mô tả của ảnh số 3</p>">
                            <div class="swiper-slide-container">
                                <div class="ava">
                                    <img src="<?php echo $mImg[1] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide item" data-src=" <?php echo $mImg[2] ?>" data-sub-html="<p>Mô tả của ảnh số 4</p>">
                            <div class="swiper-slide-container">
                                <div class="ava">
                                    <img src="<?php echo $mImg[2] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img src="<?php echo $one['thumb'] ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img src="<?php echo $mImg[0] ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img src="<?php echo $mImg[1] ?>" alt="">
                                <span class="play-icon">
                                    <svg class="icon-svg">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#play2"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img src="<?php echo $mImg[2] ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img src="<?php echo $mImg[2] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 tt_sp_chitiet">
            <h1 class="title_name d-md-block d-none"><?php echo $one['name'] ?></h1>
            <div class="sidebar_1_head flex">
                <div class="ct_star">
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                    </svg>
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                    </svg>
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                    </svg>
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                    </svg>
                    <svg class="icon-svg not">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none"></use>
                    </svg>
                </div>
                <div class="ct_danhgia">
                    <a href="">(Xem 100 đánh giá)</a> 3500 đã mua
                </div>
            </div>
            <div class="ct_price">
                <div class="price-old">
                    Giá gốc: <span>30.000.000 đ</span> <strong>Giảm 20%</strong>
                </div>
                <div class="price">
                    Giá về tay: <strong><?php echo  number_format($one['price'], 0, '.', ' '); ?> đ</strong>
                </div>
            </div>
            <div class="description">
                    <ul>
                        <li>Miêu tả: <?php echo $one['description'] ?? '' ?></li>
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
                    </ul>
            </div>
            <div class="ct_quantity">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn  btn-number" data-type="minus" data-field="">
                            <svg class="icon-svg">
                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#Minus"></use>
                            </svg>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                            <svg class="icon-svg">
                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#Plus"></use>
                            </svg>
                        </button>
                    </span>
                </div>
                <button type="submit" name="add-to-cart" value="3333" class="single_add_to_cart_button btn-green btn"><a href="/lien-he#lienHe">Tư vấn ngay</a></button>
            </div>

            <div class="product_meta">
                <span class="sku_wrapper">Mã: <span class="sku"> 17<?php echo $one['id'] ?> </span></span>
                <span class="posted_in">Danh mục: <a href="/san-pham?id=<?php echo $one['cat_id'] ?>" rel="tag"><a href="/san-pham?id=<?php echo $one['cat_id'] ?>" rel="tag">
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
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#Facebook"></use>
                    </svg>
                </a>
                <a href="">
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#Twitter"></use>
                    </svg>
                </a>
                <a href="">
                    <svg class="icon-svg">
                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#twitter2"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <?php 
        }
    }
    ?>
    <div class="product-content">
        <div class="product-section">
            <div class="row">
                <div class="col-lg-2">
                    <h5 class="title uppercase medium">Mô tả</h5>
                </div>
                <!-- <div class="col-lg-10">
                    <p>
                        Ra mắt sản phẩm mới nhà Laco. Toner dưỡng da tinh chất nước hoa hồng, bổ xung DNA cá hồi với khả năng dưỡng ẩm gấp 3 lần. Khóa ẩm, cân bằng PH, ngăn ngừa tình trạng lão hóa da, giúp da trắng sáng.</p>
                    <p>Hoa hồng ẩn chứa những công dụng tuyệt vời cho làn da như dưỡng ẩm, làm mềm da, giúp da săn chắc và thu nhỏ lỗ chân lông. Nó cũng giúp phục hồi làn da của bạn, chữa các vết cháy nắng và sạm da, giữ cho da luôn trẻ trung và căng mịn.</p>
                    <p>DNA cá hồi có những công dụng cực kỳ tốt trong việc làm đẹp da như: phục hồi làn da bị tổn thương, ngăn ngừa lão hóa do tuổi tác, kích thích da sản sinh Collagen Elastin, giúp tăng sự đàn hồi cho da, chống chảy xệ, chống nhăn da, cải thiện làn da một cách toàn diện.</p>
                    <p class="Images">
                        <img src="/images/graphics/detail.jpg">
                    </p>
                    <h3>Thành phần chính DNA Toner Laco</h3>
                    <ul>
                        <li>Rose petal extract ( Chiết xuất cánh hoa hồng)</li>
                        <li>Purify water</li>
                        <li>Glycerin</li>
                        <li>Propylen glycol</li>
                        <li>Vegeles AHA</li>
                        <li>DNA – Na (Salmon milt extract)</li>
                        <li>Phenoxyethanol</li>
                        <li>Fragrance</li>
                    </ul>
                    <div class="text-center mb20">
                        <div class="embed-video thumb thumb_16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/wtj8-Ldpupk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <p>Sản phẩm phân phối độc quyền bởi: CÔNG TY TNHH QUỐC TẾ LACO – Số 44, tổ 17, khu GĐ Văn Công Quân Đội, Mai Dịch, Cầu Giấy, Hà Nội.</p>
                    <p><strong>Quý anh chị mua hàng xin vui lòng liên hệ Phòng CSKH LACO.VN:&nbsp; Hotline bán lẻ/ bán buôn: <a href="tel:0965092353">0965092353</a> ( Trực 24/7 / zalo/ viber)</strong></p>
                </div> -->
            </div>
        </div>
        <div class="product-section">
            <div class="row">
                <div class="col-lg-2">
                    <h5 class="title uppercase medium">Đánh giá</h5>
                </div>
                <div class="col-lg-10">
                    <!-- <h4>20 đánh giá cho DNA Toner – Toner Dưỡng Da Laco</h4> -->
                    <!-- Đánh giá -->
                    <!-- <div class="box-evaluate flex mb30">
                        <div class="flex box-evaluate__left">
                            <div class="text">
                                <h4>Đánh giá</h4>
                                <span>(27 nhận xét)</span>
                            </div>
                            <div class="point">
                                <div class="number">4.5/5</div>
                                <div class="ct_star">
                                    <svg class="icon-us">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                                    </svg>
                                    <svg class="icon-us">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full"></use>
                                    </svg>
                                    <svg class="icon-us not">
                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex box-evaluate__right">
                            <a class="active" href="#">Tất cả</a>
                            <a href="#">5 Sao (122)</a>
                            <a href="#">4 Sao (122)</a>
                            <a href="#">3 Sao (122)</a>
                            <a href="#">3 Sao (122)</a>
                            <a href="#">2 Sao (122)</a>
                            <a href="#">1 Sao (122)</a>
                            <a href="#">Có bình luận (0)</a>
                        </div>
                    </div> -->
                    <!-- List Comment -->
                    <!-- <div class="list-comment">
                        <div class="item-comment">
                            <div class="info-comment">
                                <div class="avatar">
                                    <img src="/images/graphics/thumb_1x1.jpg">
                                </div>
                                <div class="flex">
                                    <div class="name">
                                        <strong>Vivek D</strong>
                                        <div class="ct_star">
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us not">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none">
                                                </use>
                                            </svg>
                                            <div class="ct_star_info">
                                                <div class="flex">
                                                    <svg class="icon-us">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                        </use>
                                                    </svg>
                                                    <svg class="icon-us">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                        </use>
                                                    </svg>
                                                    <svg class="icon-us">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                        </use>
                                                    </svg>
                                                    <svg class="icon-us">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                        </use>
                                                    </svg>
                                                    <svg class="icon-us not">
                                                        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none">
                                                        </use>
                                                    </svg>
                                                    <div class="number">4.4 out of 5</div>
                                                </div>
                                                <div class="mb10 txt_666 txt_12">50,000 ratings</div>
                                                <div class="percent-bar">
                                                    <div class="number-per">5 star</div>
                                                    <div class="main-bar-per"><span class="percent" style="width:76%"></span></div>
                                                    <div class="count-percent">76%</div>
                                                </div>
                                                <div class="percent-bar">
                                                    <div class="number-per">4 star</div>
                                                    <div class="main-bar-per"><span class="percent" style="width:46%"></span></div>
                                                    <div class="count-percent">46%</div>
                                                </div>
                                                <div class="percent-bar">
                                                    <div class="number-per">3 star</div>
                                                    <div class="main-bar-per"><span class="percent" style="width:46%"></span></div>
                                                    <div class="count-percent">46%</div>
                                                </div>
                                                <div class="percent-bar">
                                                    <div class="number-per">2 star</div>
                                                    <div class="main-bar-per"><span class="percent" style="width:46%"></span></div>
                                                    <div class="count-percent">46%</div>
                                                </div>
                                                <div class="percent-bar">
                                                    <div class="number-per">1 star</div>
                                                    <div class="main-bar-per"><span class="percent" style="width:46%"></span></div>
                                                    <div class="count-percent">46%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note">
                                        <span>Awesome Quality at Great Price</span>
                                        <div class="date">December 14, 2018</div>
                                    </div>
                                </div>
                                <div class="txt_12 mt5">Color: BLACK | <a class="color_green" href=""><strong>Verified
                                            Purchase</strong></a></div>
                            </div>
                            <div class="content-comment">
                                <p>I'm one of the very, very few people who cannot use the apple air pods. No matter how
                                    hard I
                                    try, they fall out of my ear in less than a minute. I thought I would try a
                                    different brand,
                                    and when I put these in my ear, they fell out within seconds. I was about to give
                                    up, pack
                                    up the box, and send it back, but I decided to check out the instruction manual in
                                    case i
                                    was doing something wrong. I’m so happy I did. Turns out there were 4 sizes of
                                    plastic ear
                                    caps included with the earbuds. On my third try, the second smallest ones, I felt
                                    how i
                                    imagine Cinderella felt when she tried on the glass slipper. They were perfect and
                                    no matter
                                    how much I jumped up and down or shook my head, they stayed in place! The quality of
                                    sound
                                    is impeccable, nice highs and lows, with a decent amount of bass. Once I found the
                                    right
                                    match, the fit was extremely comfortable. I love these headphones, they have already
                                    changed
                                    my life for the better!</p>
                            </div>
                        </div>
                        <div class="item-comment">
                            <div class="info-comment">
                                <div class="avatar">
                                    <img src="/images/graphics/thumb_1x1.jpg">
                                </div>
                                <div class="flex">
                                    <div class="name">
                                        <strong>Vivek D</strong>
                                        <div class="ct_star">
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us not">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="note">
                                        <span>Awesome Quality at Great Price</span>
                                        <div class="date">December 14, 2018</div>
                                    </div>
                                </div>
                                <div class="txt_12 mt5">Color: BLACK | <a class="color_green" href=""><strong>Verified
                                            Purchase</strong></a></div>
                            </div>
                            <div class="content-comment">
                                <p>I'm one of the very, very few people who cannot use the apple air pods. No matter how
                                    hard I
                                    try, they fall out of my ear in less than a minute. I thought I would try a
                                    different brand,
                                    and when I put these in my ear, they fell out within seconds. I was about to give
                                    up, pack
                                    up the box, and send it back, but I decided to check out the instruction manual in
                                    case i
                                    was doing something wrong. I’m so happy I did. Turns out there were 4 sizes of
                                    plastic ear
                                    caps included with the earbuds. On my third try, the second smallest ones, I felt
                                    how i
                                    imagine Cinderella felt when she tried on the glass slipper. They were perfect and
                                    no matter
                                    how much I jumped up and down or shook my head, they stayed in place! The quality of
                                    sound
                                    is impeccable, nice highs and lows, with a decent amount of bass. Once I found the
                                    right
                                    match, the fit was extremely comfortable. I love these headphones, they have already
                                    changed
                                    my life for the better!</p>
                                <div class="lisst-img">
                                    <a href="#"><img src="https://via.placeholder.com/100x100"></a>
                                    <a href="#"><img src="https://via.placeholder.com/100x100"></a>
                                    <a href="#"><img src="https://via.placeholder.com/100x100"></a>
                                    <a href="#"><img src="https://via.placeholder.com/100x100"></a>
                                    <a href="#"><img src="https://via.placeholder.com/100x100"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-comment">
                            <div class="info-comment">
                                <div class="avatar">
                                    <img src="/images/graphics/thumb_1x1.jpg">
                                </div>
                                <div class="flex">
                                    <div class="name">
                                        <strong>Vivek D</strong>
                                        <div class="ct_star">
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-full">
                                                </use>
                                            </svg>
                                            <svg class="icon-us not">
                                                <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#star-none">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="note">
                                        <span>Awesome Quality at Great Price</span>
                                        <div class="date">December 14, 2018</div>
                                    </div>
                                </div>
                                <div class="txt_12 mt5">Color: BLACK | <a class="color_green" href=""><strong>Verified
                                            Purchase</strong></a></div>
                            </div>
                            <div class="content-comment">
                                <p>I'm one of the very, very few people who cannot use the apple air pods. No matter how
                                    hard I
                                    try, they fall out of my ear in less than a minute. I thought I would try a
                                    different brand,
                                    and when I put these in my ear, they fell out within seconds. I was about to give
                                    up, pack
                                    up the box, and send it back, but I decided to check out the instruction manual in
                                    case i
                                    was doing something wrong. I’m so happy I did. Turns out there were 4 sizes of
                                    plastic ear
                                    caps included with the earbuds. On my third try, the second smallest ones, I felt
                                    how i
                                    imagine Cinderella felt when she tried on the glass slipper. They were perfect and
                                    no matter
                                    how much I jumped up and down or shook my head, they stayed in place! The quality of
                                    sound
                                    is impeccable, nice highs and lows, with a decent amount of bass. Once I found the
                                    right
                                    match, the fit was extremely comfortable. I love these headphones, they have already
                                    changed
                                    my life for the better!</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="devvn_prod_cmt " id="hoi-dap">
                        <div class="mb10"><strong>Hỏi đáp</strong></div>
                        <div class="devvn_cmt_form">
                            <form action="" method="post" id="devvn_cmt" novalidate="novalidate">
                                <div class="devvn_cmt_input">
                                    <textarea placeholder="Mời bạn tham gia thảo luận, vui lòng nhập tiếng Việt có dấu." name="devvn_cmt_content" id="devvn_cmt_content" minlength="20"></textarea>
                                </div>
                                <div class="devvn_cmt_form_bottom ">
                                    <div class="devvn_cmt_radio">
                                        <label>
                                            <input name="devvn_cmt_gender" type="radio" value="male" checked="">
                                            <span>Anh</span>
                                        </label>
                                        <label>
                                            <input name="devvn_cmt_gender" type="radio" value="female">
                                            <span>Chị</span>
                                        </label>
                                    </div>
                                    <div class="devvn_cmt_input">
                                        <input name="devvn_cmt_name" type="text" id="devvn_cmt_name" placeholder="Họ tên (bắt buộc)">
                                    </div>
                                    <div class="devvn_cmt_input">
                                        <input name="devvn_cmt_phone" type="text" id="devvn_cmt_phone" required="" placeholder="Số điện thoại (bắt buộc)" aria-required="true">
                                    </div>
                                    <div class="devvn_cmt_input">
                                        <input name="devvn_cmt_email" type="text" id="devvn_cmt_email" placeholder="Email ">
                                    </div>
                                    <div class="devvn_cmt_submit">
                                        <button type="submit" id="devvn_cmt_submit">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="devvn_cmt_list mt15">
                            <p>Chưa có bình luận nào</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
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