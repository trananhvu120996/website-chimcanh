<?php
@session_start();
ini_set("display_error",0);
if(isset($_POST["end"]))
{
	include("controllers/c_dat_hang.php");
	$c_dat_hang=new C_dat_hang();
	$c_dat_hang->Xu_ly_dat_hang();
	die();	
}
if(!$_SESSION["ma_khach_hang"])
{
	/*include("controllers/c_dat_hang.php");
	$c_dat_hang=new C_dat_hang();
	$c_dat_hang->Hien_thi_dat_hang();*/
	echo "Bạn chưa đăng nhập, vui lòng đăng nhập để mua hàng</br>";
	echo "<a href='.'>Quay về trang chủ</a>";
}
else
{
	include("controllers/c_gio_hang.php");
	$c_gio_hang=new C_gio_hang();
	$c_gio_hang->Hien_thi_gio_hang();
}

?>