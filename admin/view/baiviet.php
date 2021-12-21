<!DOCTYPE html>
<html>
<head>
    <?php include 'layouts/headerindex.php'; ?>
</head>
<body>
    <?php include 'layouts/loading.php'; ?>
    <?php include 'layouts/headerpage.php'; ?>
    <?php include 'layouts/colums_left.php'; ?>
    <?php include 'layouts/datatable.php'; ?>
    <li class="breadcrumb-item active" aria-current="page" ><a href="addsp.php" class="bg-light-blue btn text-blue ">Thêm mới bài viết</a></li>
</ol>
</nav>
</div>

</div>
</div>
<div class="card-box mb-30">
    <h2 class="h4 pd-20">Bài viết</h2>
    <table class="data-table table nowrap">
        <thead>
            <tr>
                <th class="table-plus datatable-nosort">Hình ảnh</th>
                <th>Tên bài viết</th>
                <th>Chủ đề</th>
                <th>Ngày đăng</th>
                <th>Tác giả</th>
                <th>Số trang</th>
                <th class="datatable-nosort"></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<=3;$i++){ ?>
                <tr>
                    <td class="table-plus">
                        <img src="vendors/images/product-2.jpg" width="70" height="70" alt="">
                    </td>
                    <td>
                        <h5 class="font-16"><a href="https://saigonsneaker.com/blog/">Giày loại <?php echo "$i" ?></td>
                    <td>Thời trang</td>
                    <td>20/11/2021</td>
                    <td>Frog</td>
                    <td>9</td>
                    <td><?php include 'layouts/edit-del-blog.php'; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
</body>
</html> 