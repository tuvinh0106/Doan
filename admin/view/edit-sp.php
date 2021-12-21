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
                <h4 class="text-blue h4">Chỉnh sửa sản phẩm</h4>
            </div>

        </div>
        <button><a href="product.php">Quay lại</button>
        <form>
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <img src="vendors/images/product-2.jpg" alt="" class="avatar-photo">
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img id="image" src="vendors/images/product-2.jpg" alt="Picture">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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
                <label>Mô tả sản phẩm</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Ghi chú</label>
                <input type="text" class="form-control">
            </div>
            <br/>  
            <button type="button" style="background-color: #00BFFF; margin-left: auto ;margin-right: auto;display: block;" onclick="tt()">Lưu</button>  
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
        alert("Lưu lại thành công");
    }
</script>
</body>
</html>