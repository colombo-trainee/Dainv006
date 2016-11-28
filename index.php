<?php session_start();
include('lib/database.php'); 
include('lib/helper.php');
// echo $_SESSION['user1']
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>quanLy nhan vien</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="big">
	<div class="nav">
		<h3><a href="index.php?id=<?php if(isset($id)){
			echo $id;
		} ?>">LOGO</a></h3>
		<div class="link">
		<?php if(isset($_SESSION['user'])&&isset($_SESSION['pass'])){echo'Xin chào: '.$_SESSION['user'];}else if(isset($_SESSION['user1'])){echo"Xin chào: <a href=''>".$_SESSION['user1']."</a>"; }else if(isset($_SESSION['user2'])){echo"Xin chào: <a href='index'>".$_SESSION['user2']."</a>";}
		else{echo"<a href='view/login.php'>Đăng nhập</a>";}
		  ?>
		<a href="controller/logout.php">Đăng xuất</a>
	</div>
	</div>
	<hr>
	<!-- main -->
	<?php 
	if(isset($_GET['page']))
	{
		switch ($_GET['page']) {
			case 'dangky':
				include('controller/dangky_controll.php');
				include('view/dangky.php');
				break;
			case 'chitietuser':
				include('view/chitietuser.php');
				break;
			case 'suatv':
				include('controller/suatv_controll.php');
				include('view/suatv.php');
				break;
		
		}
	}else{
		include('view/danhsachuser.php');
	} ?>
	<!-- end main -->
	</div>
</body>
</html>