<?php 
require_once "../templates/home/header.php";
?>

<style >

    .title-me{
        margin: inherit;
        padding: 30px;
    }


    .title-name{
        font-size: 20px;
        width: 50%;
        margin: auto;
        border-radius: 8px;
        padding: 5px 10px;
        background-color: var(--color-background);
        text-align: center;
        color: white;
        font-weight: 600;
        margin-bottom: 15px;
    }

    #contact{
        font-size: 16px;
        background: url("images/background/bg2.png");
        color: white;
        
    }

    .contact{
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        /* align-items: center; */
    }

    .contact-address{
        flex: 1;
        margin: 20px;
        margin-top: 40px
    }

    .contact-address ul {
        padding: 10px 30px;
    }

    .contact-address ul li{
        list-style-type: circle;
        margin: 10px 0px 10px 20px;
    }

    .contact-address a{
        color: var(--color-text);
    }

    .contact-address a:hover{
        color: white;
    }

    .contact-form{
        flex: 1;
        margin: 20px;
        margin-right: 60px;
        margin-top: 40px


    }

    .contact-form input{
        cursor: text;
        margin: 10px;
    }

    .contact-form textarea{
        margin: 10px;
        height: 80px;
    }


    .contact-map{
        /* margin: 30px 50px 50px; */
        height: 450px;
        width: 100%;
    }

    .contact-map iframe{
        margin: 20px 0px;
        height: 100%;
        width: 100%;
    }

    .hasFeetback{
        color: white;
        /* background-color: ; */
        text-align: center;
        display: none;
    }

    @media screen and (max-width: 800px){

        .title-name{
            width: 70%;
            margin-left: 10px;
        }

        .contact-address ul {
            padding: 10px 15px;
        }

        .contact{
            display: block;
        }
    }


</style>

<section id="contact">
    <div class="title-me">
        Liên hệ với chúng tôi
    </div>
    <div id="lienHe" class="contact">
        <div class="contact-address">
            <p class="title-name">
                THE LUYEN IRON ART
            </p>
            <ul>
                <li>Địa chỉ: Xóm Trung Long, thôn Đức Long, xã Duy Nhất, huyện Vũ Thư, tỉnh Thái Bình</li>
                <li>Điện thoại: 0337737958</li>
                <li>Email: tungxeco55@gmail.com</li>
                <li>Website: <a href="/">www.thetung.edu.vn</a></li>
            </ul>
        </div>
        <div class="contact-form">
            <P class="title-name">
                FORM LIÊN HỆ
            </P>
            <p class="hasFeetback"> 🔔 🔔 🔔 Chúng tôi đã nhân được tin nhắn của bạn và sẽ liên hệ lại với bạn sớm nhất có thể!!</p>
            <form action="" method="post">
                <input name="name" type="text" required placeholder="Họ & tên">
                <input name="phone" class="contact-form-sdt" required type="text" placeholder="Số điện thoại" >
                <textarea name="content" id="" cols="30" rows="10" placeholder="Nội dung tư vấn "></textarea>
                <input class="btn-me" type="submit" value="Gửi ngay">
            </form>
        </div>
    </div>

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5298.925618462922!2d106.28300152450768!3d20.353982740610746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e24f00000001%3A0x9e5578456880fd35!2zVWJuZCBYw6MgRHV5IE5o4bqldA!5e0!3m2!1svi!2s!4v1704980958514!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php 
    if($ret) {

?>
<script>
    var feetback =document.querySelector('.hasFeetback');
    feetback.style.display = 'block';
</script>
<?php 
    }
?>

<?php 
require_once "../templates/home/footer.php";
?>
