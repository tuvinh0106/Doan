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
</ol>
</nav>
</div>

</div>
</div>
<form>
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Sản phẩm</h4>
				
			</div>
		</div>
		<form>
			<div class="form-group">
				<label>Vui lòng chọn ảnh sản phẩm</label>
				<input type="file" class="form-control-file form-control height-auto">
			</div>
			<div class="form-group">
				<label>Trong file</label>
				<div class="custom-file">
					<input type="file" class="custom-file-input">
					<label class="custom-file-label">Chọn file</label>
				</div>
			</div>
			<div class="form-group">
				<label>Tên sản phẩm</label>
				<input class="form-control" type="text" placeholder="Giày...">
			</div>
			<div class="form-group">
				<label class="col-sm-12 col-md-2 col-form-label">Color</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" value="#563d7c" type="color">
				</div>
			</div>
			
			<div class="form-group">
				<label>Tên màu</label>
				<input class="form-control" value="Black" type="text">
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Size Giày</label>
				<div class="col-sm-12 col-md-10">
					<select class="custom-select col-12">
						<option selected="">Choose...</option>
						<option value="1">35</option>
						<option value="2">36</option>
						<option value="3">37</option>
						<option value="4">38</option>
						<option value="5">39</option>
						<option value="6">40</option>
						<option value="7">41</option>
						<option value="8">42</option>
						<option value="9">43</option>
						<option value="10">44</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label>Giá sản phẩm</label>
				<input class="form-control" type="text" placeholder="$1000">
			</div>
			<div class="form-group">
				<label>Số lượng</label>
				<input class="form-control" type="text" placeholder="30">
			</div>
			
			<div class="form-group">
				<label>Mô tả sản phẩm</label>
				<textarea class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Ghi chú</label>
				<input type="text" class="form-control">
			</div>
			
			<br/>  
			<button type="button" style="background-color: #00BFFF; margin-left: auto ;margin-right: auto;display: block;" onclick="tt()">Hoàn tất</button>  
		</form>
		

	</code></pre>
</div>
</div>
</div>




</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
<script>
	function tt(){
		alert("Đã thêm thành công");
	}
</script>
</body>
</html>