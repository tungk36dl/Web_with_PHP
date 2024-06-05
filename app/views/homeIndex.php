<?php
require_once "../templates/home/header.php";
require_once "../app/models/BaseModel.php";

?>

<style>
    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
            /* Điều chỉnh giá trị này để thay đổi mức độ zoom vào */
        }

        100% {
            transform: scale(1);
        }
    }

    .zoomable-image {
        overflow: hidden;
        position: relative;
        /* width: 300px; */
        /* height: 100px; */
    }

    .zoomable-image img {
        width: 100%;
        height: 100%;
        animation: zoomInOut 20s infinite;
        /* Điều chỉnh thời gian và số lần lặp lại nếu cần */
        transform-origin: center center;
        /* Đảm bảo ảnh zoom từ trung tâm */
        /* background-repeat: ; */
    }


    /* .swiper-container{
        position: relative;
    }

    .bubble-container {
        position: absolute;
        float: top;
      position: relative;
      width: 100vw;
      height: 100vh;
    } */

    .bubble-container {
        position: relative;
        width: 100%;
        height: 100%;
    }


    .bubble {
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #fffdfd;
        border-radius: 50%;
        opacity: 0;
        animation: floatUp 50s linear infinite;
        box-shadow: 0px 0px 5px 5px rgba(195, 197, 195, 0.8);
    }

    .bubble2 {
        position: absolute;
        width: 5px;
        height: 5px;
        background-color: #ffffff;

        border-radius: 50%;
        opacity: 0;
        animation: floatUp 60s linear infinite;
        box-shadow: 0px 0px 2px 3px rgba(206, 211, 206, 0.8);
    }


    @keyframes floatUp {
        0% {
            opacity: 0;
            transform: translateY(100vh) translateX(0);
        }

        10% {
            opacity: 0.7;
        }

        90% {
            opacity: 0.7;
        }

        100% {
            opacity: 0;
            transform: translateY(-100vh) translateX(-50vw);
        }
    }

    .content-slide1 {
        position: relative;
    }

    .content-slide1 h1 {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        color: greenyellow;
        text-align: center;

        font-family: 'Fleur De Leah', cursive;
        font-weight: bold;
        font-size: 2rem;
        margin-top: 24%;
    }

    .content-slide1 p {
        position: absolute;
        width: 100%;
        margin: auto;
        height: 100%;
        top: 0;
        left: 0;
        color: wheat;
        text-align: center;
        font-size: 1.3rem;
        margin-top: 18%;
    }


    .content-slide1 p:last-child {
        position: absolute;
        width: 100%;
        margin: auto;
        height: 100%;
        top: 0;
        left: 0;
        color: wheat;
        text-align: center;
        font-size: 1.3rem;
        margin-top: 30%;
    }

    .content-slide2 {
        position: relative;
    }

    .lop-phu {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .content-slide2 h1 {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        color: greenyellow;
        text-align: center;

        font-family: 'Fleur De Leah', cursive;
        font-weight: bold;
        font-size: 40px;
        margin-top: 20%;
    }

    .content-slide2 p {
        position: absolute;
        width: 100%;
        margin: auto;
        height: 100%;
        top: 0;
        left: 0;
        color: wheat;
        text-align: center;
        font-size: 20px;
        margin-top: 25%;
    }

    .list-article_item .box-text{
        padding: 10px 10px 40px;
    }

    .img-zoom{
        transition: 1s ease;
    }

    .img-zoom:hover{
        transform: scale(1.3);
    }
 



    /* background */
    .section-info.clearfix {
        padding-top: 35px;
        padding-bottom: 50px;
        margin-top: -30px;
        background-color: #d3e5d2;    
    }


    #iframe-ytb {

        border: 1px solid;
        padding: 30px 50px 50px;
        background: url("images/background/bg1.png");


    }

    #iframe-ytb iframe {
        display: flex;
        width: 870px;
        height: 422px;
        margin: auto;
    }

    #iframe-ytb .about-me {
        display: inline-block;
        width: 100%;
    }

    #iframe-ytb .about-me ul {
        margin: 20px 20%;
        display: flex;
        justify-content: space-around;
        text-align: center;
    }

    #iframe-ytb .about-me ul li {
        color: white;
        width: 25%;

    }

    #iframe-ytb .about-me i {
        color: var(--color-text);
        margin-left: -10px;
    }


    .box-text-title {
        height: 60px;
    }

    .info>p{
        font-size: 16px;
        color: black;
        text-align: center;
    }

    .info>p a{
        color: #00e100;
    }

    .info>p a:hover{
        color: black;
    }

    .info-table{
        width: 100%;
        display: inline-block;
    }

    .info-table table{
        margin: 10px;
        border-color: #bce4bc;
        width: 100%;
        box-shadow: 0 0 10px 1px #bce4bc;
    }

    .info-table tr{
        width: 100%;
        border-left: 3px solid  #bce4bc;
        border-right: 3px solid  #bce4bc;
    }

    .info-table tr:first-child{
        border-top: 3px solid  #bce4bc;
    }

    .info-table tr:last-child{
        border-bottom: 3px solid  #bce4bc;
    }

    .info-table td{
        font-size: 16px;
        height: 24px;
        padding: 8px;
    }

    .info-table td:first-child{
        width: 30%;
    }

    .info-table td:last-child{
        width: 70%;
    }

    .info-img{
        display: flex;
        justify-content: center;
    }

    .info img{
        margin-bottom: 5px;
    }

    @media (min-width:575px) and (max-width:990px){
        #iframe-ytb iframe{
            width: 500px;
            height: 260px;
        }
    }


    @media screen and (max-width: 575px) {

        .title-me {
            font-size: 30px;
        }

        .content-slide2 h1 {
            font-size: 20px;
        }

        .content-slide2 p {
            font-size: 12px;
            margin-top: 25%;
            padding: 10px 40px;
        }

        .section-info .banner2{
            width: 73%;
        }

        #iframe-ytb {
            padding: 30px 10px;
        }

        #iframe-ytb iframe {
            width: 330px;
            height: 163px;
        }

        #iframe-ytb .about-me ul {
            margin: 20px;
        }

        .hidden {
            display: none;
        }

    }
</style>


<section class="section-banner-home clearfix fixed-height mb24">
    <div class="swiper-container">

        <div class="swiper-wrapper">
            <div class="swiper-slide thumb content-slide1 zoomable-image bubble-container">
                <img class="image-zoom" src="images/slide/slidefix1.png">

            </div>
            <div class="swiper-slide thumb content-slide2 zoomable-image bubble-container">
                <div class="">
                    <img class="image-zoom" src="https://satmythuathuynhgiaan.com/wp-content/uploads/2022/12/baner-satmythuat-huynhgiaan.jpg">
                </div>

            </div>
        </div>


        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="section-info clearfix mb24">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden text-center">
                <img src="images/banners/banner2.png">
            </div>
            <div class="col-sm-6 text-center">
                <div class="title-me">
                    <b></b>
                    <span>Sắt mỹ nghệ: xu hướng tất yếu</span>
                    <b></b>
                </div>
                <p>Sắt thép mỹ thuật trong thiết kế nội ngoại thất bao gồm: Cổng sắt mỹ thuật, hàng rào sắt mỹ thuật, hành lang sắt kĩ nghệ, ban công sắt mỹ thuật, cầu thang sắt mỹ nghệ đẹp, lan can và khung bảo vệ nghệ thuật.</p>
                <p>Sắt mỹ thuật không chỉ đơn giản được sử dụng với mục đích trang trí hay bảo vệ không gian sống, mà còn tạo ra công trình nghệ thuật mới mẻ và bền vững về vẻ đẹp vĩnh cửu tại nơi bạn sống và có thể hưởng thụ một cuộc sống bình yên.</p>
            </div>
            <div class="col-sm-3 text-center">
                <img class="banner2" src="images/banners/banner1.png">
            </div>
        </div>
    </div>
</section>


<section class="container clearfix">
    <div class="title-me">
        <b></b>
        <span>Sản phẩm sắt mỹ thuật
        </span>
        <b></b>
    </div>
    <div class="list-product">
        <div class="row">

            <?php
            if (isset($dataSanpham)) {
                foreach ($dataSanpham as $one) {
            ?>

                    <!-- <div class="col-lg-3 col-sm-6 mb20">
                <div class="product-small has-hover">
                    <div class="gift-sale">
                        <div class="sale">-5%</div>
                        <div class="code">Quà tặng 600K</div>
                    </div>
                    <div class="box-image">
                        <a href="#">
                            <img class="show-on-hover back-image" src="images/graphics/san-pham2.jpg">
                            <img src="images/graphics/san-pham1.jpg">
                        </a>
                    </div>
                    <div class="box-text">
                        <h3><a href="">DNA Toner – Toner Dưỡng Da Laco</a></h3>
                        <div class="price">
                            <div class="old">480.000 đ</div>
                            <div class="new">350.000₫</div>
                        </div>
                    </div>
                </div>
            </div> -->

                    <div class="col-lg-3 col-sm-6 mb20">
                        <div class="product-small has-hover">


                            <div class="gift-sale">
                                <div class="sale">-5%</div>
                                <div class="code">Tặng BH 2 năm</div>
                            </div>
                            <div class="box-image">
                                <a href="san-pham/sp?idSp=<?php echo $one['id'] ?>">
                                    <?php

                                    echo "<img class='img-zoom' src='$one[thumb]'>";
                                    ?>
                                </a>
                            </div>
                            <div class="box-text">
                            <a href="san-pham/sp?idSp=<?php echo $one['id'] ?>">
                                <?php

                                echo ("<h1> $one[name]</h1>");

                                ?>
                                </a>

                                <div class="price">
                                    <div class="old">0 đ</div>
                                    <div class="new">
                                    <?php
                                        if (!is_null($one['price'])) {
                                            $price = $one['price'];
                                            echo  number_format($price, 0, '.', ' ');
                                        }
                                        ?> ₫
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
             
            }
            ?>



        </div>
    </div>
</section>

<div id="iframe-ytb">
    <div class="about-me">
        <h2 class="title-me">Giới thiệu cửa hàng </h2>
        <ul>
            <li> <i class="fa fa-star" aria-hidden="true"></i>
                Cơ khí The Luyen chuyên chế tác, sản xuất và thi công các sản phẩm Sắt Nghệ thuật chuyên nghiệp hàng đấu tại xã Duy Nhất.</li>
            <li><i class="fa fa-star" aria-hidden="true"></i>
                Chúng tôi luôn luôn lấy UY TÍN & CHẤT LƯỢNG làm kim chỉ nam trong chiến lược phát triển</li>
            <li><i class="fa fa-star" aria-hidden="true"></i>
                Luôn luôn nâng cao quy trình của dịch vụ và sản xuất, đặc biệt là chất lượng sản phẩm “Mang đến sự hài lòng”</li>
        </ul>
    </div>
    <iframe src="https://www.youtube.com/embed/gYdgMX_RlVM?si=79tqHl9fIRPwH2S7" title="YouTube video player"></iframe>
</div>

<!-- Slide chuyển động giữa trang -->
<section class="section-customer clearfix mb24">
    <div class="swiper-container">
        <!-- <div class="swiper-wrapper">
            <div class="swiper-slide thumb">
                <img src="images/Ảnh slide3.png">
                <div class="box-text">
                    <div class="wrap">
                        <div class="star-rating">
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                        </div>
                        <p style="color: red;">Thật sự Linh rất vui khi đã tìm được bộ dầu Gội Amla để giúp tóc bớt
                            rụng, thậm chí chúng còn mọc
                            trở lại khá nhanh khiến Linh rất hài lòng. Một điều Linh thích nữa là
                            mùi hương thảo dược của
                            Amla rất dễ chịu và sảng khoái. Linh sẽ tiếp tục sử dụng và giới thiệu
                            rộng rãi bộ sản phẩm này
                            cho bạn bè và đồng nghiệp.</p>
                        <div class="testimonial-meta pt-half">
                            <strong class="testimonial-name test_name">Quyền Linh</strong>
                            <span class="testimonial-name-divider"> / </span>
                             <span class="testimonial-company test_company">Nghệ sĩ:</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide thumb">
                <img src="images/Ảnh slide3.png">
                <div class="box-text">
                    <div class="wrap">
                        <div class="star-rating">
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                            <svg class="icon-svg">
                                <use xlink:href="images/icons/icon.svg#star-full"></use>
                            </svg>
                        </div>
                        <p>Thật sự Linh rất vui khi đã tìm được bộ dầu Gội Amla để giúp tóc bớt
                            rụng, thậm chí chúng còn mọc
                            trở lại khá nhanh khiến Linh rất hài lòng. Một điều Linh thích nữa là
                            mùi hương thảo dược của
                            Amla rất dễ chịu và sảng khoái. Linh sẽ tiếp tục sử dụng và giới thiệu
                            rộng rãi bộ sản phẩm này
                            cho bạn bè và đồng nghiệp.</p>
                        <div class="testimonial-meta pt-half">
                            <strong class="testimonial-name test_name">Quyền Linh</strong>
                            <span class="testimonial-name-divider"> / </span> <span
                                class="testimonial-company test_company">Nghệ sĩ:</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

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
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    </div>
</section>

<section class="container clearfix mb24">
    <div class="title-me">
        <b></b>
        <span>Thông tin hữu ích
        </span>
        <b></b>
    </div>
    <div class="list-article_item">
        <div class="row">
            <?php

            if (isset($dataTintuc)) {
                $limit = 0;

                foreach ($dataTintuc as $one) {
            ?>

                    <div class="col-lg-3 col-sm-6 mb8">
                        <a class="article_item" href="/tin-tuc/tt?idTt=<?php echo $one['id'] ?>" title="<?php echo $one['name'] ?>">
                            <div class="badge-inner">
                                <div class="date"> <?php echo substr($one['created_at'], 8, 3)  ?></div>
                                <div>
                                    <?php echo substr($one['created_at'], 5, 2)  ?>
                                </div>
                            </div>
                            <div class="box-image">
                                <span class="thumb thumb_5x4">
                                    <?php

                                    echo "<img src='$one[thumb]'>";
                                    ?>
                                </span>
                            </div>
                            <div class="box-text">
                                <div class="box-text-title">
                                    <h3 class="title_new">
                                        <?php
                                        echo substr($one['name'], 0, 75);
                                        ?>
                                    </h3>
                                </div>
                                <div class="box-text-description">
                                    <p>
                                        <?php
                                        echo substr($one['description'], 0, 60);
                                        ?>.....
                                    </p>
                                </div>
                                <span class="btn-me">Đọc tiếp</span>
                            </div>

                        </a>
                    </div>


            <?php
                   $limit ++;
                       if($limit == 4) {
                           break;
                       }
                   }
                }
            }
            ?>

        </div>
    </div>


</section>

<section class="container clearfix mb24">
    <div class="info">
        <div class="title-me">Thi công sắt nghệ thuật trọn gói tại Thái Bình</div>
        <p>Doanh nghiiệp Sắt mỹ thuật The Luyen tự hào bởi đội ngũ kỹ sư, kỹ thuật có tay nghề cao với nhiều năm kinh nghiệm trong nghề, luôn mang trong mình sự nhiệt huyết, sự sáng tạo và luôn có tinh thần trách nhiệm.</p>
        <div class="info-table">
            <table border="1px">
                <tr>
                    <td>✅ Phân loại</td>
                    <td>⭐ Sắt Mỹ Thuật, Sắt Nghệ Thuật, Sắt Mỹ Nghệ, Sắt Uốn, Sắt Kỹ Thuật</td>
                </tr>
                <tr>
                    <td>📉 Loại sản phẩm</td>
                    <td>⭐ Cửa sắt, cổng sắt, lan can, ban công, cầu thang, cửa sổ, khung bảo vệ</td>
                </tr>
                <tr>
                    <td>🥇 Thi công</td>
                    <td>⭐ Trọn gói tại khu vực xã Duy Nhất, Hồng Phong, Vũ Tiến, Vũ Doài,…</td>
                </tr>
                <tr>
                    <td>✅ Mẫu mã</td>
                    <td>⭐ Cập nhật mẫu xu hướng mới, đẹp, hiện đại, sang trọng và đẳng cấp</td>
                </tr>
                <tr>
                    <td>📃 Thương hiệu, nhà sản xuất</td>
                    <td>⭐ Sắt mỹ thuật The Luyen </td>
                </tr>
            </table>
        </div>
        <p>Với nhiều năm kinh nghiệm trong ngành làm sắt mỹ nghệ, xưởng sản xuất sắt mỹ thuật Huỳnh Gia An không ngừng phát triển, tìm tòi và luôn cập nhật những thiết kế có xu hướng mới nhất trên thị trường để mang đến cho quý khách hàng những sản phẩm thời thượng, độc đáo, mới lạ và tinh xảo, đẳng cấp nhất.</p>
        <div class="info-img">
            <img src="/images/slide/group22.png" alt="">
        </div>
        <p>Ảnh 1</p>
        <br>
        <p>Tự hào là đơn vị đã thiết kế và thi công rất nhiều những công trình hạng mục sắt mỹ thuật lớn ở thành phố Hồ Chí Minh và nhiều tỉnh thành phố khác trong cả nước. Chúng tôi tự tin về các dòng sản phẩm sắt mỹ thuật, sắt mỹ nghệ, thi công sắt nghệ thuật tp hcm. Kỹ nghệ sắt của chúng tôi hoàn toàn có thể đáp ứng được tất cả các nhu cầu của quý khách hàng.</p>
        <p>Mời quý khách gọi ngay Hotline: <a href="#">0337737958</a> để được tư vấn và báo giá sắt mỹ thuật hoàn toàn miễn phí. Cảm ơn quý khách hàng đã tin tưởng và đồng hành cùng chúng tôi.

</p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelectorAll('.bubble-container');
        container.forEach(element => {
            // Tạo ra nhiều bong bóng và thêm chúng vào container
            for (let i = 0; i < 30; i++) {
                const bubble = document.createElement('div');
                bubble.classList.add('bubble');
                bubble.style.left = `${Math.random() * 200}vw`;
                bubble.style.top = `${Math.random() * 200}vh`;
                bubble.style.animationDelay = `-${Math.random() * 20}s`;
                element.appendChild(bubble);
            }

            for (let i = 0; i < 30; i++) {
                const bubble2 = document.createElement('div');
                bubble2.classList.add('bubble2');
                bubble2.style.left = `${Math.random() * 200}vw`;
                bubble2.style.top = `${Math.random() * 200}vh`;
                bubble2.style.animationDelay = `-${Math.random() * 20}s`;
                element.appendChild(bubble2);
            }
        });

    });
    document.addEventListener('DOMContentLoaded', function() {
        const contentSlide2 = document.querySelector('.content-slide2');

        const lopPhu = document.createElement('div');
        lopPhu.classList.add('lop-phu');
        contentSlide2.appendChild(lopPhu);

        const noiDung1 = document.createElement('h1');
        noiDung1.textContent = 'Sắt Mĩ Thuật Châu Âu Mr Lành';
        contentSlide2.appendChild(noiDung1);

        const noiDung2 = document.createElement('p');
        noiDung2.textContent = 'Chúng tôi chuyên sản xuất, thi công các công trình về sắt mĩ thuật hàng đầu Thái Bình';
        contentSlide2.appendChild(noiDung2);

        // const contentSlide1 = document.querySelector('.content-slide1');
        // const headingSlide1 =document.createElement('h1');
        // headingSlide1.textContent = 'Sắt Mĩ Thuật Châu Âu Mr Lành';
        // contentSlide1.appendChild(headingSlide1);

        // const text1Slide1 =document.createElement('p');
        // text1Slide1.textContent = 'www.satmythuat.com';
        // contentSlide1.appendChild(text1Slide1);

        // const text2Slide1 =document.createElement('p');
        // text2Slide1.textContent = 'Sản phẩm Sắt mỹ thuật Mr.Lành:Cửa cổng, cửa đi, lan can cầu thang,ban công, hàng ràorào,...';
        // contentSlide1.appendChild(text2Slide1);

    });
</script>



<?php
require_once "../templates/home/footer.php"
?>