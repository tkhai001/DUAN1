<div>
    <div class="box">
        <div class="content_box">
            <img src="/upload/icon/comment_ic_2.png" alt="">
            <h2>TỔNG HỢP BÌNH LUẬN</h2>
        </div>
    </div>

    <div class="box">
        <div class="list_pd_cmt">
            <form action="admin.php?mod=admin&act=comment" method="post">
            <table>
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Số bình luận</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['dsbl'] as $bl): ?>
                    <tr>
                        <td>
                            <img class="img_product" src="upload/img_product/<?= $bl['hinh_anh'] ?>" alt="">
                        </td>
                        <td>
                            <?= $bl['ten_sp'] ?>
                        </td>
                        <td>
                            <?= $bl['total_comments'] ?>
                        </td>
                        <td>
                            <?= $bl['old_date'] ?>
                        </td>
                        <td>
                            <?= $bl['new_date'] ?>
                        </td>
                        <td>
                            <a href="">
                                <div class="div_detail">
                                    <img class="img_view_ic" src="/upload/icon/view_ic.png" alt="">
                                    <p>Xem chi tiết</p>
                                </div> 
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</div>