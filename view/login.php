<?php 

	if(isset($_SESSION['user'])&&isset($_SESSION['pass'])||isset($_SESSION['user1'])&&isset($_SESSION['pass1'])||isset($_SESSION['user1'])&&isset($_SESSION['pass1']))
	{
		header('location:index.php?id='.$id);
	}
	if(isset($_COOKIE['user2']))
	{
		header('location:index.php');
	}
	include('controller/login_controll.php');	 ?>


	<link rel="stylesheet" href="css/login.css">
<form method="post">
	<div id="form-login">
		
	<h2> Đăng nhập vào hệ thống</h2>
    <ul>
    	<?php if(isset($error)){show_error($error, 'err');} ?>
        <li><label>Tài khoản</label><input type="text" name="email" required /></li>
        <?php if(isset($error)){show_error($error, 'user');} ?>
        <li><label>Mật khẩu</label><input type="password" name="pass"  required/></li>
       <?php if(isset($error)){show_error($error, 'pass');} ?>
        <li><input type="submit" name="submit" value="Đăng nhập" /></input>
        	<button><a href="index.php?page=dangky">Dang ky</a></button></li>
    </ul>
	</div>
</form>
</div>
<!-- </body>
</html> -->