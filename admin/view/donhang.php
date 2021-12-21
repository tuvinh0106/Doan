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
    <li class="breadcrumb-item active" aria-current="page" ><a href="adddh.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</ol>
</nav>
</div>                  
</div>
</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Danh sách hóa đơn</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>    
                    <th>Tên đơn hàng</th>
                    <th>Mã đơn hàng</th>
                    <th>Người bán</th>
                    <th>Ngày bán</th>
                    <th>Giá<th>                 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $ma=array("SV1","SV2","SV3");  
                     $ten=array("Giày 1","Giày 2","Giày 3");
                     $nguoiban=array("SV","GV","BV");                         
                     $ngayban=array("20/11/2021","20/11/2021","20/11/2021");
                     $gia=array("$120","$121","$122");
                     $arrhd=array("");
                     for($i=0;$i<count($ma);$i++){
                        echo "<tr>";
                            echo "<td>$ten[$i]</td>";
                            echo "<td>$ma[$i]</td>"; 
                            echo "<td>$nguoiban[$i]</td>";  
                            echo "<td>$ngayban[$i]</td>";                      
                            echo "<td>$gia[$i]</td>";
                            echo '<td>
                                <a href="edit-dh.php" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                            </td>';
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<?php include 'layouts/script.php'; ?>
</body>
</html>