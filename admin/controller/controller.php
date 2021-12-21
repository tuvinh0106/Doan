<?php 
function showAdmin($arr = array())	{

echo'<table class="data-table table nowrap">';
echo'	<thead>';
echo'	<tr>';
echo'			<th class="table-plus">Tên NV</th>';
echo'			<th>Giới tính</th>';
echo'			<th>SĐT</th>';
echo'			<th>Email</th>';
echo'			<th>Ngày sinh</th>';
echo'			<th>Chức vụ</th>';
echo'			<th class="datatable-nosort"></th>';
echo'		</tr>';
echo'	</thead>';
echo'	<tbody>';
foreach ($arr as $admin){
	echo'<tr>';
	echo'<td>';
	echo'<div class="name-avatar d-flex align-items-center">';
	echo'<div class="avatar mr-2 flex-shrink-0">';
	echo'<div class="txt">';
	echo'<div class="weight-600">'.$admin["tendn"].'</div>';
	echo'</div>';
	echo'</div></a>';
	echo'</td>';
	echo'<td>'.$admin["gender"].'</td>';
	echo'<td>'.$admin["sdt"].'</td>';
	echo'<td>'.$admin["email"].'</td>';
	echo'<td>'.$admin["thangsinh"].''.$admin["namsinh"].'</td>';
	echo'<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">'.$admin["chucvu"].'</span></td>';
	echo'	<td>';
	echo'<div class="table-actions">';
	echo'	<a href="profile.php" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>';
	echo'	<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>';
	echo'</div>';
	echo'</td>';
	echo'	</tr>';
	}
echo'	</tbody>';
echo'</table>';
}
function isAdminExist($tendn,$arrAdmin=array()){
	$isExist = false;
	foreach ($arrAdmin as $admin) {
		foreach ($admin as $key => $value) {
			if($key =="tendn" && $value=="$tendn"){
				$isExist = true;
			}
		}
	}
	return $isExist;
}
$admin_action = $_POST["admin_action"];
echo $admin_action;
switch ($admin_action) {
	case "register":
$txt_email = $_POST["txt_email"];
$txt_tendn = $_POST["txt_tendn"];
$txt_password = $_POST["txt_password"];
$txt_xnpassword = $_POST["txt_xnpassword"];
$txt_tenfull = $_POST["txt_tenfull"];
$gender = $_POST["gender"];
$txt_diachi = $_POST["txt_diachi"];
$cbx_chucvu = $_POST["cbx_chucvu"];
$cbx_level = $_POST["cbx_level"];
$txt_sdt = $_POST["txt_sdt"];
$txt_cccd = $_POST["txt_cccd"];
$cbx_thangsinh = $_POST["cbx_thangsinh"];
$cbx_namsinh = $_POST["cbx_namsinh"];

$admin_01 = array("email"=>"duy@gmail.com","tendn"=>"tranduy","password"=>"123","xnpassword"=>"123","tenfull"=>"TranKhanhDuy","gender"=>"male","diachi"=>"717TQB","chucvu"=>"quantrivien","level"=>"2","sdt"=>"001321","cccd"=>"3009","thangsinh"=>"September","namsinh"=>"2010");
$arrAdmin = array();
array_push($arrAdmin, $admin_01);
showAdmin($arrAdmin);
$isAdmin = isAdminExist($txt_tendn,$arrAdmin);
if($isAdmin){
	header("Location:profile.php");
	exit();
}else{
	$admin_02 =array("email"=>$txt_email,"tendn"=>$txt_tendn,"password"=>$txt_password,"xnpassword"=>$txt_xnpassword,"tenfull"=>$txt_tenfull,"gender"=>$gender,"diachi"=>$txt_diachi,"chucvu"=>$cbx_chucvu,"level"=>$cbx_level,"sdt"=>$txt_sdt,"cccd"=>$txt_cccd,"thangsinh"=>$cbx_thangsinh,"namsinh"=>$cbx_namsinh);
	array_push($arrAdmin, $admin_02);
	showAdmin($arrAdmin);
}
		break;
	case "login":
		echo"Hello";
	break;
	
}
?>