<hr>

<style>
    #footer {
        background-image: url("/images/background/bgfooter4.png");

    }
</style>


<style>
    .button-contact-cd {

        position: relative;
        z-index: 10000;
    }

    .zalo-cd {
        bottom: 140px;
        right: 50px;
        position: fixed;

    }

    .sdt-cd {
        bottom: 50px;
        right: 50px;
        position: fixed;

    }

    .phone-image-cd {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        position: absolute;
        left: 14%;
        top: 14%;
        /* transform: translateY(-50%); */

    }

    .zalo-cd .phone-image-cd img {
        background-color: #0088cc;


    }

    .zalo-cd .phone-circle-cd {
        background-color: #71ade8;
        box-shadow: 0px 0px 10px 2px rgb(77, 156, 231);


    }

    .sdt-cd .phone-image-cd img {
        background-color: #00e100;

    }

    .sdt-cd .phone-circle-cd {
        background-color: rgb(139, 225, 139);
        box-shadow: 0px 0px 10px 2px rgb(143, 228, 16);
    }

    .phone-cd {
        width: 60px;
        height: 60px;
        position: relative;
    }

    .phone-circle-cd {

        width: 60px;
        height: 60px;
        border-radius: 50%;
        animation: zalo 1s infinite;
    }

    .phone-image-cd img {
        position: absolute;
        border-radius: 50%;
        padding: 4px;
        z-index: 2;
        width: 100%;
        animation: image-cd 1s infinite;
    }

    .phone-number-cd {
        z-index: 1;
        color: white;
        font-size: 20px;
        position: absolute;
        padding: 8px 60px 8px 10px;
        border-radius: 50PX;
        top: 16%;
        right: 20%;
        background-color: #00e100;
    }

    #footer .container {
        display: flex;
        justify-content: space-evenly;
    }


    #footer .widget-title{
        color: var(--color-text);
        font-size: 20px;
    }

    #footer .footer-contact{
        text-align: center;
    }

    .footer-contact i {
        font-size: 30px;
        margin: -30px 5px 10px;
    }

    .footer-contact a:hover{
        color: var(--color-text)
    }


    /* 2962ff 
        #0088cc*/

    @keyframes zalo {
        0% {
            transform: scale(1);
        }

        20% {
            transform: scale(1.1);
        }

        40% {
            transform: scale(1.3);
        }
    }

    @keyframes image-cd {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(30deg);
        }

        75% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(-30deg);
        }
    }

    @media (max-width: 740px) {
        .zalo-cd {
            bottom: 130px;
            right: 20px;
            position: fixed;
            z-index: 100;

        }

        .sdt-cd {
            bottom: 50px;

            right: 20px;
            position: fixed;
            z-index: 100;

        }
    }
</style>

<div class="button-contact-cd">
    <div class="zalo-cd">
        <div class="phone-cd">

            <div class="phone-circle-cd">

            </div>
            <div class="phone-image-cd">
                <a target="_blank" href="http://zaloapp.com/qr/p/17a6npi1lz2gp">
                    <img src="/images/contactFixed/zalo-icon.png" alt="">
                </a>
            </div>


        </div>
    </div>
    <div class="sdt-cd">
        <div class="phone-cd">

            <div class="phone-circle-cd">

            </div>
            <div class="phone-image-cd">
                <a target="_blank" href="http://zaloapp.com/qr/p/17a6npi1lz2gp">
                    <img src="/images/contactFixed/phone7.png" alt="">
                </a>
            </div>
            <div class="phone-number-cd">
                0337737958
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="footer clearfix">

    <div class="don-vi">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb20">
                    <center>
                        <div class="widget-title"><span>CHUYÊN SẮT MỸ THUẬT</span></div>
                    </center>
                    <div class="text-center mb30">
                        <img style="width: 200px;" src="/images/slide/logo300.png">
                    </div>
                    <div class="footer-contact">
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    </div>

                </div>
                <div class="col-md-3 mb20">
                    <div class="widget-title"><span>Liên Hệ</span></div>
                    <div class="textwidget">
                        <p></p>
                        <center></center>
                        <p></p>
                        <p></p>
                        <ul><br>
                            <li>Địa chỉ: Đức Long - Duy Nhất - Vũ Thư - Thái Bình</li>
                            <br>
                            <li>Số điện thoại: 0337737958 hoặc 0123456789</li>
                            <br>

                            <li>Email: tungxeco55@gmail.com</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3 mb20">
                    <div class="widget-title"><span>SẢn phẩm </span></div>
                    <ul class="menu">
                        <li class="menu-item"><a href=""><i class="fa fa-bars" aria-hidden="true"></i>
                                Cổng sắt mỹ thuật </a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-bars" aria-hidden="true"></i>
                                Cầu thang sắt mỹ thuật </a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-bars" aria-hidden="true"></i>
                                Lan can sắt mỹ thuật </a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-bars" aria-hidden="true"></i>
                                Hàng rào sắt</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-bars" aria-hidden="true"></i>
                                Cửa nhôm</a></li>

                    </ul>
                </div>
                <div class="col-md-3 mb20">
                    <div class="widget-title"><span>Hỗ trợ khách hàng </span></div>
                    <ul class="menu">
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Hướng dẫn tư vấn lựa chọn sản phẩm</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Chính sách bán hàng</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Tuyển đại lý</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Cam kết bán hàng</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Sản phẩm mới</a></li>
                        <li class="menu-item"><a href=""><i class="fa fa-check" aria-hidden="true"></i>
                                Công trình </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            Copyright 2020 © TheLuyen.VN
        </div>
    </div>

</footer>

<!--Footer-->

<!--End Footer-->


<!--Back to top-->
<a href="javascript:;" id="to_top">
    <svg class="icon-svg">
        <use xlink:href="/layout/laco/HTML-PC/images/icons/icon.svg#arrow01"></use>
    </svg>
</a>
<div class="mask-content"> </div>
<div class="close-show">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
</div>

<!--Jquery lib-->
<script type="text/javascript" src="/layout/laco/HTML-PC/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/swiper.min.js"></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/svgxuse.js"></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/css-vars-ponyfill.js"></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/common.js"></script>
<!-- build:script -->

<script type="text/javascript" src="/layout/laco/HTML-PC/js/detail.js"></script>
<script type="text/javascript" src='/layout/laco/HTML-PC/js/jquery.ez-plus.js'></script>
<script type="text/javascript" src="/layout/laco/HTML-PC/js/lightgallery-all.min.js"></script>

<div class="clearfix"></div>
<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 350) {
            $('.has-sticky').addClass('down');
        } else {
            $('.has-sticky').removeClass('down');
        }
    });
    $(document).ready(function() {
        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);

        });
        $('.quantity-left-minus').click(function(e) {
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

</body>

</html>