<?php 
require_once "../templates/home/header.php";
?>
    
    <section class="container clearfix fixed-height mt20">
    <div class="text-center mb30">
        <h1 class="title-detail txt_18 medium mb10" style="color: #555;">CATEGORY ARCHIVES: TIN TỨC</h1>
        <p>Trang tin tức doanh nghiệp sắt mỹ thuật Thế Luyến</p>
        <br>
    </div>
    <div class="row">
        <div class="col-lg-9 mb30">
            <div class="list-article_item">
                <!-- <div class="article_item big">
                    <a href="#" title="aa">
                        <div class="tag">TIN TỨC</div>
                        <h3 class="title_new">Phụ nữ hiện đại và việc cân bằng giữa công việc – gia đình</h3>
                        <div class="note">POSTED ON 15 THÁNG TÁM, 2020 BY MỸ PHẨM HỮU CƠ LACO</div>
                        <div class="box-image">
                            <span class="thumb thumb_5x4">
                                <img src="images/graphics/new1.jpg">
                            </span>
                        </div>
                        <div class="box-text">
                            <p>Có lẽ hàng nghìn chị em phụ nữ đang cùng chung tâm rạng hồi hộp và háo hức khi cùng chờ đợi một trong những sự kiện đình đám trong ngành làm đẹp trong vài ngày tới: Ra mắt sản phẩm máy rửa mặt Lacco Luxury. Chiếc máy được các chuyên gia chăm sóc sắc[…]</p>
                            <div class="text-center"><span class="red-more">Continue reading →</span></div>
                        </div>
                    </a>
                    <div class="entry-meta flex space-between">
                        <div>
                            Posted in Tin tức  |  Tagged máy rửa mặt laco, Máy xóa nọng cằm
                        </div>
                        <div>Leave a comment</div>
                    </div>
                </div> -->
                <?php
                    if($data) {
                        foreach($data as $one) {
                ?>

                    <div class="article_item big">
                        <a href="/tin-tuc/tt?idTt=<?php echo $one['id'] ?>" title="aa">
                            <div class="tag">TIN TỨC</div>
                            <h3 class="title_new"><?php echo $one['name'] ?></h3>
                            <div class="note">POSTED ON <?php echo $one['created_at'] ?></div>
                            <div class="box-image">
                                <span class="thumb thumb_5x4">
                                    <img src="<?php echo $one['thumb'] ?>">
                                </span>
                            </div>
                            <div class="box-text">
                                <p> <?php echo $one['description'] ?></p>
                                <div class="text-center"><span class="red-more">Continue reading →</span></div>
                            </div>
                        </a>
                        <div class="entry-meta flex space-between">
                            <div>
                                Posted in Tin tức  |  Tin Entertaiment
                            </div>
                            <div>Leave a comment</div>
                        </div>
                    </div>

                <?php
                        }
                    }
                ?>
               


            </div>
            <!-- <div id="pagination" class="folder">
                <a href="/thoi-trang-p2" class="pagination_btn pa_prev">
                    <svg class="icon-svg">
                        <use xlink:href="#arrow01"></use>
                    </svg>
                </a>
                <a class=" active" href="javascript:void(0)"><span class="pagi-left"></span><span class="pagi-mid">1</span><span class="pagi-right"></span></a>
                <a class="" href="/thoi-trang-p2"><span class="pagi-left"></span><span class="pagi-mid">2</span><span class="pagi-right"></span></a>
                <a class="" href="/thoi-trang-p3"><span class="pagi-left"></span><span class="pagi-mid">3</span><span class="pagi-right"></span></a>
                <a class="" href="/thoi-trang-p4"><span class="pagi-left"></span><span class="pagi-mid">4</span><span class="pagi-right"></span></a>
                <a href="/thoi-trang-p2" class="pagination_btn pa_next">
                    <svg class="icon-svg">
                        <use xlink:href="#arrow01"></use>
                    </svg>
                </a>
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