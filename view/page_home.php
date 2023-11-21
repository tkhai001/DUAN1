    <article>
        <div class="banner">
            <div>
            </div>
            <div>
                <img src="/upload/img/banner.png" alt="">
            </div>
        </div>
        <div class="about">
            <img src="/upload/img/text.png" alt="">
            <h1>STUDIO THIẾT KẾ NỘI THẤT</h1>
            <p>FURNI OCEAN là studio thiết kế nội thất tại Việt Nam, chuyên tư vấn và thiết kế các không gian nội thất sang trọng, hiện đại với sự tập trung vào sáng tạo và chất lượng.</p>
            <a href=""><button>MUA NGAY</button></a>
        </div>

        <div class="box">
            <div class="categories_list">
                <div class="content">
                    <p>ĐƯỢC CHẾ TẠO BẰNG VẬT LIỆU TỐT NHẤT TRÊN THỊ TRƯỜNG</p>
                    <button>Khám phá</button>
                </div>

                <?php foreach($data['dsdm'] as $index => $dm): ?>
                    <div id="<?= $index + 1?>" class="category">
                        <img src="/upload/img_categories/<?= $dm['Hinhanh_dm'] ?>" alt="">
                        <button><?= $dm['tendm'] ?></button>
                    </div>
                <?php endforeach; ?>
                
                <!-- <div id="ca2" class="category">
                    <img src="/upload/img_categories/Rectangle 47.png" alt="">
                    <button>BÀN</button>
                </div>
                <div id="ca3" class="category">
                    <img src="/upload/img_categories/Rectangle 48.png" alt="">
                    <button>ĐỒ TRANG TRÍ</button>
                </div> -->
            </div>
        </div>
        <div class="title_product">Sản Phẩm Mới</div>
        <div class="box">
            <div class="product_list">
                <?php foreach($data['dsspnew'] as $sp): ?>
                    <div class="product_box">
                    <img class="img_product" src="/upload/img_product/<?=$sp['hinhanh_sp']?>" alt="">
                    <div class="product_about">
                        <div>
                            <h2><?=$sp['tensp']?></h2>
                            <p><?=$sp['gia_ban']?>đ</p>
                        </div>
                        <img src="/upload/icon/more icon.png" alt="">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="box">
            <button class="btn_seealso">Xem thêm<img src="/upload/icon/seealso icon.png" alt=""></button>
        </div>
        <div class="box">
            <div class="benefit_box">
                <div class="benefit_box_content">
                    <img src="/upload/icon/line.png" alt="">
                    <p>Những lợi ích khi sử dụng dịch vụ của chúng tôi</p>
                </div>
                <div class="list_box">
                    <div class="benefit_nav">
                        <img src="/upload/icon/Cash.png" alt="">
                        <h2>BẢO MẬT THANH TOÁN</h2>
                        <p>Bảo mật thông tin thanh toán của khách hàng tuyệt đối</p>
                    </div>
                    <div class="benefit_nav">
                        <img src="/upload/icon/Address.png" alt="">
                        <h2>GIAO HÀNG NHANH</h2>
                        <p>Mang sản phẩm đến tay người dùng nhanh nhất</p>
                    </div>
                    <div class="benefit_nav">
                        <img src="/upload/icon/Headphones.png" alt="">
                        <h2>TƯ VẤN TẬN TÌNH</h2>
                        <p>Mọi thắc mắc xin liên hệ chúng tôi để được hỗ trợ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="title_product">Sản Phẩm Khuyến Mãi</div>
        <div class="box">
            <div class="product_list">
                <?php foreach($data['dsspsale'] as $sp): ?>
                    <div class="product_box">
                    <img class="img_product" src="/upload/img_product/<?=$sp['hinhanh_sp']?>" alt="">
                    <div class="product_about_sale">
                        <div>
                            <h2><?=$sp['tensp']?></h2>
                            <div class="price">
                                <p><?=$sp['gia_ban']?>đ</p>
                                <p style="font-size: 14px; text-decoration:line-through; color: rgba(135, 135, 135, 1); margin-left: 10px;">
                                    <?=$sp['gia_goc']?>đ
                                </p>
                            </div>
                        </div>
                        <img src="/upload/icon/more icon.png" alt="">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="box">
            <button class="btn_seealso">Xem thêm<img src="/upload/icon/seealso icon.png" alt=""></button>
        </div>
        <div class="box">
            <div class="list_banner">
                <div class="list_banner_left">
                    <div>
                        <p>THIẾT KẾ PHÒNG KHÁCH CHI PHÍ HỢP LÝ</p>
                        <button>XEM THÊM</button>
                    </div>
                    <img src="/upload/img/banner2.png" alt="">
                </div>
                <div class="list_banner_right">
                    <img src="/upload/img/banner3.png" alt="">
                    <p>Không gian phòng khách tinh tế và phù hợp với ngân sách mà vẫn thể hiện cá tính và phong cách riêng.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="review">Review đánh giá từ khách hàng</div>
        </div>
        <div class="box">
            <div class="review_list">
                <div class="review_box">
                    <img src="/upload/img/banner4.png" alt="">
                    <div class="user_infomation">
                        <img src="/upload/avt/avt1.png" alt="">
                        <div>
                            <h3>Chị An Nguyễn</h3>
                            <p>TP Hồ Chí Minh</p>
                        </div>
                    </div>
                    <p>Nhân viên tư vấn nhiệt tình và chuyên nghiệp. Chất lượng ghế sofa xứng đáng với giá tiền của sản phẩm.</p>
                </div>
                <div class="review_box">
                    <img src="/upload/img/banner5.png" alt="">
                    <div class="user_infomation">
                        <img src="/upload/avt/avt2.png" alt="">
                        <div>
                            <h3>Anh Phạm Minh Khang</h3>
                            <p>Bình Định</p>
                        </div>
                    </div>
                    <p>Chất lượng bàn tốt, cao cấp, sang trọng, phù hợp với nhu cầu sử dụng của tôi. Chính sách chăm sóc khách hàng tốt.</p>
                </div>
                <div class="review_box_right">
                    <div>
                        <p>Xem thêm</p>
                        <img src="/upload/icon/arrow.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </article>
