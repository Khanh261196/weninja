<?php
include_once 'set.php';
$_title = "Đăng nhập ".$_name_site;
include_once 'head.php';
$alert = null;
if($_login == null)
{
	if(isset($_POST['username']))
	{
	

		  
			$user = htmlspecialchars($_POST['username']);
			$pass = htmlspecialchars($_POST['password']);
			$select = _fetch(_select("*",'player',"username='$user'"));
			if($select['password'] == $pass)
			{
				$_SESSION['user'] = $user;
				header('location:/user.php');
			}
			else
			{
				$alert = "$_err Thông tin đăng nhập không chính xác ! $_end";
			}
		
	}
}
else
{
	header("location:/");
}

?>
<main class="flex-grow-1 flex-shrink-1">
	<div class="bg-light">
		<div class="container">
			<ol class="breadcrumb bg-transparent rounded-0">
				<li class="breadcrumb-item active">Đăng nhập tài khoản</li>
			</ol>
		</div>
	</div>
	<div class="container">
		<div class="signin card">
			<div class="card-body p-0">
				<h5 class="card-title">Đăng nhập</h5>
				<?php echo $alert; ?>
				<form method="post">
					<div class="form-group">
						<input type="text" class="form-control " name="username" value="" placeholder="Tên đăng nhập" required autofocus>
					</div>
					<div class="form-group">
						<input type="password" class="form-control " name="password" placeholder="Mật khẩu" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Đăng nhập</button>
					</div>

					<div class="form-group mb-0">
						<div class="d-flex justify-content-between">
							<a class="btn btn-link" href="/nick.txt">Nick có sẵn cho ae</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php
include_once 'end.php';
?>