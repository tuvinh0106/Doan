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
	<li class="breadcrumb-item active" aria-current="page" ><a href="addsp.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</ol>
</nav>
</div>

</div>
</div>
<div class="card-box mb-30">
	<h2 class="h4 pd-20">Sản phẩm cửa hàng</h2>
	<table class="data-table table nowrap">
		<thead>
			<tr>
				<th class="table-plus datatable-nosort">Sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Màu sắc</th>
				<th>Kích thước</th>
				<th>Giá</th>
				<th>Số lượng</th>
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
						<h5 class="font-16">Giày loại <?php echo "$i" ?></h5>SV <?php echo "$i" ?>
					</td>
					<td>Black</td>
					<td>M</td>
					<td>$1000</td>
					<td>9</td>
					<td><?php include 'layouts/edit-del-sp.php'; ?></td>
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