<?php 
require_once "../templates/home/header.php";
?>

<style>
    .content-wrap{
        word-wrap: break-word;
        white-space: pre-wrap;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }

    .content-wrap p{
        white-space: pre-wrap;
    }
</style>

<section class="container clearfix fixed-height mt20">
    <div class="row">
        <div class="col-lg-9 mb30 detail_tin">

            <?php
                $idTt = $_GET['idTt'];
                if($data && $idTt) {

                }
                else{
                    echo "Tin tuc khong ton tai!!!";
                }
            ?>

            <?php 
                foreach($data as $one){
                    if($one['id'] == $idTt) {

                 
            ?>

            <div class="list-article_item">
                <div class="article_item big">
                    <div class="tag">TIN TỨC</div>
                    <h3 class="title_new"><?php echo $one['name'] ?></h3>
                    <div class="note">POSTED ON <?php echo $one['created_at'] ?></div>
                    <div class="box-image">
                        <span class="thumb thumb_5x4">
                            <img src="<?php echo $one['thumb'] ?>">
                        </span>
                    </div>
                    <div class="box-text">
                        <p><?php echo $one['description'] ?></p>
                    </div>
                </div>
            </div>

           <div class="container">
                <pre class="content-wrap">
                    <?php echo $one['content'] ?>
                </pre>
           </div>


            <?php 
               }
            }
            ?>

            <!-- <div class="">
                <p><h2 class="medium">Chế độ bảo hành</h2></p>
                <p><strong>Laco bảo hành 1 đổi 1 trong vòng 6 tháng kể từ ngày mua với các lỗi do nhà sản xuất</strong></p>
                <p>Lưu ý: Phiên bản máy rửa mặt Laco Luxury sẽ được bảo hành 12 tháng</p>
                <p><strong>1.Điều kiện bảo hành:</strong> – Vỏ hộp còn nguyên, đầy đủ phụ kiện, tem nhãn – Máy không bị rách, cháy, móp méo do va đập – Thời hạn bảo hành: 6 tháng kể từ ngày mua – Chi phí gửi hàng bảo hành: khách tự đến gửi bảo hành hoặc gửi chuyển phát, chi phí chuyển phát 2 chiều do khách chi trả. </p>
                <p><strong>2. Địa chỉ bảo hành:</strong> Khách mua máy rửa mặt chính hãng Laco ở đâu liên hệ bảo hành ở đấy. Chi phí gửi hàng bảo hành: khách tự đến gửi bảo hành hoặc gửi chuyển phát về nơi mua trực tiếp, chi phí chuyển phát 2 chiều do khách chi trả.</p>
                <p><Strong>3. Đại lý bán hàng có trách nhiệm</Strong> – Kiểm tra máy ngay khi nhận hàng hoặc trước khi gửi cho khách lẻ. – Lưu thông tin khách hàng mua sỉ và lẻ: họ tên + ngày mua hàng để tiếp nhận bảo hành trong 6 tháng từ ngày mua, quá thời hạn không tiếp nhận bảo hành – Kiểm tra máy khi khách gửi về bảo hành: + Kiểm tra lỗi dây sạc: cách cắm sạc, thử thay dây sạc khác, dây sạc dự phòng công ty cấp + Nếu không phải do lỗi dây sạc: gửi máy về nơi đã nhập hàng trực tiếp hoặc các đầu tổng phân phối của đội nhóm mình, chi phí vận chuyển do người gửi chi trả + Các đầu tổng phân phối có trách nhiệm tiếp nhận hàng lỗi và gửi về văn phòng công ty ghi rõ số lượng, ngày gửi để được bảo hành sản phẩm. Lưu ý: máy rửa mặt Laco gửi về bắt buộc cần có thông tin người gửi</p>
            </div> -->

            <!-- <div class="blog-share text-center mb30 mt30">
                <div class="is-divider medium"></div>
                <a href="">
                    <svg class="icon-svg">
                        <use xlink:href="images/icons/icon.svg#Facebook"></use>
                    </svg>
                </a>
                <a href="">
                    <svg class="icon-svg">
                        <use xlink:href="images/icons/icon.svg#Twitter"></use>
                    </svg>
                </a>
                <a href="">
                    <svg class="icon-svg">
                        <use xlink:href="images/icons/icon.svg#twitter2"></use>
                    </svg>
                </a>
            </div> -->

            <div class="list-article_item">
                <div class="entry-meta flex justify-center">  
                    <!-- This entry was posted in Tin tức and tagged bảo hành máy rửa mặt laco, máy rửa mặt laco. -->
                </div>
            </div>

            <!-- <div id="respond" class="comment-respond clearfix ">
                <h3 id="reply-title" class="comment-reply-title">Trả lời</h3>
                <p>Email của bạn sẽ không được hiển thị công khai.</p>
                <div class="form-default">
                    <div class="form-group">
                        <label for="">Bình luận</label>
                        <textarea type="" class="form-control" style="height: 100px;"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input type="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Trang web</label>
                                <input type="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mb10 mt10">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">
                            <span>Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</span>
                        </label>
                    </div>
                    <button type="submit" class="btn-green btn">Phản hồi</button>
                </div>
             </div> -->
            
        </div>
        <div class="col-lg-3 post-sidebar mb30">
            <div class="box-category mb20">
                <span class="widget-title "><span>Tin mới nhất</span></span>
                <div class="is-divider small"></div>
                <ul class="recent-blog-posts clearfix">
                    <?php 
                        $limit = 0;
                        foreach($data as $one) {

                    ?>
                        <li>
                            <div class="badge-inner">
                                <div class="date"><?php echo substr($one['created_at'], 8, 3)  ?></div>
                                <div><?php echo substr($one['created_at'], 5, 2)  ?></div>
                            </div>
                            <h3><a href="#"><?php echo $one['name'] ?></a></h3>
                        </li>
                    <?php 
                            $limit++;
                            if($limit == 4) {
                                break;
                            }
                        }

                    ?>
             
                </ul>
            </div>
            <!-- <div class="box-category mb20">
                <span class="widget-title "><span>RECENT COMMENTS</span></span>
                <div class="is-divider small"></div>
                <ul class="recent-blog-posts clearfix">
                    <li>
                        <h3><a href="#">Phụ nữ hiện đại và việc cân bằng giữa công việc – gia đình</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">Phụ nữ hiện đại và việc cân bằng giữa công việc – gia đình</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">Phụ nữ hiện đại và việc cân bằng giữa công việc – gia đình</a></h3>
                    </li>
                    <li>
                        <h3><a href="#">Phụ nữ hiện đại và việc cân bằng giữa công việc – gia đình</a></h3>
                    </li>
                    
                </ul>
            </div> -->
            <!-- <div class="box-category mb20">
                <span class="widget-title "><span>CHuyên mục</span></span>
                <div class="is-divider small"></div>
                <ul class="recent-blog-posts clearfix">
                    <li>
                        <h3><a href="#">Cẩm nang làm đẹp <span style="color:#777">(10)</span></a></h3>
                    </li>
                    <li>
                        <h3><a href="#"><strong>Tin tức </strong><span style="color:#777">(10)</span></a></h3>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</section>

<?php 
require_once "../templates/home/footer.php";
?>