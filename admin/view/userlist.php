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
</nav>
</div>
</div>
<div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="Nhập tên" aria-controls="DataTables_Table_0"></label></div></div>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4">Danh sách khách hàng</h4>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">Tên Khách hàng</th>
					<th>Cấp</th>
					<th>SĐT</th>
					<th>Địa chỉ</th>
					<th>Ngày tạo</th>
					<th class="datatable-nosort"></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				for($i=0;$i<=10;$i++){
					?>
					<tr>
						<td class="table-plus">Gloria <?php echo "$i" ?></td>
						<td>LV <?php echo "$i" ?></td>
						<td>09711</td>
						<td>180 Cao Lỗ, P4, Q8 </td>
						<td>29-03-2011</td>
						<td>
							<?php include 'layouts/action.php'; ?>
						</td>
					</tr>
					<?php 
				} ?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<?php include 'layouts/script.php'; ?>
</body>
</html>