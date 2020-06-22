<div class="footer">  <!-- Footer1-->
            <div class="fixwidth clearfix">
                <div class="content_footer">
                    <div class="content_foot">
                        <b>VỀ SPORTER.VN</b>
                    </div>
                    <p>Hệ thống bán lẻ đồ thể thao Sporter là đơn vị chuyên sản xuất và phân phối các sản phẩm thể thao chuyên nghiệp. Tại đây bạn có thể dễ dàng mua Quần áo và dụng cụ thể thao chất lượng cao, chính hãng... </p>
                    <p><a class="Hotline">HOTLINE:19001000</a></p>
                    <div class="img_icon">
                        <a href="#"> <img class="icon1" src="<?php echo public_frontend() ?>img/icons8-facebook-100.png"   ></a>
                        <a href="#"> <img class="icon2" src="<?php echo public_frontend() ?>img/icons8-instagram-50.png"  ></a>
                        <a href="#"> <img class="icon3" src="<?php echo public_frontend() ?>img/icons8-twitter-48.png"   ></a>
                
                    </div>
                </div>    <!-- -->
            
                <div class="content_footer2">  <!-- Footer2 -->
                    <div class="content_foot2">
                        <b>ĐĂNG KÝ NHẬN KHUYẾN MÃI</b>
                    </div>
                    <p>Hãy nhập email của bạn để chúng tôi gửi email ngay khi có thông tin về những chương trình khuyến mãi mới.</p>
                    <form method="" action="" class="form_search2">                
                        <input type="text" id="fname" name="fname"  placeholder="Nhập email của bạn"><br>
                        <button class="button5">Đăng ký</button>
                    </form>
                </div>   

                <div class="footer_right">
                    <div class="boxfooter_fanpage">
                        <div class="chat_facebook"> 
                            <div class="fb-page" data-href="https://www.facebook.com/nike/" data-tabs="timeline" data-width="500" data-height="225" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nike/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nike/">Nike</a></blockquote></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer2">
            <div class="content_footer3 ">
                <ul class="content_foot3 clearfix">
                    <li><a href="#"> <img class="icon4" src="<?php echo public_frontend() ?>img/icons8-location-48.png"  width="18" > </a></li>
                    <li>VietNam</li>
                    <li class="copyright">©2020 126 Team, Inc. All Rights Reserved</li>
                </ul> 
            </div>              
        </div>   <!-- -->
    </div>    

    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:0987654321" class="pps-btn-img">
                <img src="<?php echo public_frontend() ?>img/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0987654321">
                <span class="text-hotline">1900.1000</span>
            </a>
        </div>
    </div>
    <div class="mappage">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501707.73905572796!2d106.40345095850728!3d10.765916392492459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eefdb25d923%3A0x4bcf54ddca2b7214!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2s!4v1588424894071!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> 
    
    <div class="loadmenu">
        <nav id="my-menu">
            <ul id="">
                <!--Sổ danh mục cha-->
                <?php foreach($data as $key => $value): ?>
                <li><a href="#" id="<?php echo $key ?>"><?php echo $key ?></a>
                    <ul>
                        <!--sổ danh mục con-->
                        <?php foreach($value as $item): ?>
                        <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <?php endforeach ?>
                <li ><a href="Login.php">Đăng nhập</a></li> 
            </ul>
        </nav>
    </div>
