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
	<li class="breadcrumb-item active" aria-current="page" ><a href="register.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</nav>
</div>
</div>
<div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="Nhập tên" aria-controls="DataTables_Table_0"></label></div></div>
<div class="card-box pb-10">
	<div class="h5 pd-20 mb-0">Danh sách nhân viên</div>
	<table class="data-table table nowrap">
		<thead>
			<tr>
				<th class="table-plus">Tên NV</th>
				<th>Giới tính</th>
				<th>Tuổi</th>
				<th>Email</th>
				<th>Ngày tham gia</th>
				<th>Chức vụ</th>
				<th class="datatable-nosort"></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			for($i=0;$i<=7;$i++){
				?>
				<tr>
					<td class="table-plus"><a href="chitiet.php">
						<div class="name-avatar d-flex align-items-center">
							<div class="avatar mr-2 flex-shrink-0">
								<img src="vendors/images/photo0.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
							</div>
							<div class="txt">
								<div class="weight-600">Frog <?php echo"$i" ?></div>
							</div>
						</div></a>
					</td>
					<td>Nữ</td>
					<td>101</td>
					<td>Frog@yhaoo.com</td>
					<td>30 Jul 2021</td>
					<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Nhân viên</span></td>
					<td>
						<div class="table-actions">
							<a href="profile.php" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
							<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
</body>
</html>