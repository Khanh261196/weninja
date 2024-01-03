<?php
include_once 'set.php';
$_title = "Đăng ký tài khoản ".$_name_site;
include_once 'head.php';
$_alert = null;
if ($_login == null) 
{
	if(isset($_POST['username']))
	{
		  

			$username = isset_sql($_POST['username']);
			$password = isset_sql($_POST['password']);
			$repassword = isset_sql($_POST['repassword']);
			$magioithieu = $_tientogioithieu.'_'._randtxt().'_'.$username;
			if($password == $repassword) {
				$txt = _insert('player',"username,password,luong","'$username','$password','100000000'");
				$read = _select("*",'player',"username='$username'");
				if(is_array(_fetch($read)))
				{
					$_alert = _alert('err',"Tài khoản này đã tồn tại, vui lòng chọn tài khoản khác !");
				}
				else
				{
					$kiemtra = _query($txt);
					if($kiemtra)
					{
						$_alert = _alert('succ','Đăng kí thành công</a>');
					}
					else
					{
						$_alert = _alert('err',"Có lỗi gì đó xảy ra, đăng kí thất bại");
					}
				}
			}
			else
			{
				$_alert = _alert('err',"Hai mật khẩu không khớp nhau, vui lòng kiểm tra lại !");
			}

	}
} 
else 
{
	header('location:/user.php');
}
?>
<main class="flex-grow-1 flex-shrink-1">
	<div class="bg-light">
		<div class="container">
			<ol class="breadcrumb bg-transparent rounded-0">
				<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
				<li class="breadcrumb-item active">Đăng ký tài khoản</li>
			</ol>
		</div>
	</div>
	<div class="container">
		<div class="signin card">
			<div class="card-body p-0">
				<h5 class="card-title">Đăng ký tài khoản thành công</h5>
				<?php echo $_alert; ?>
				<form method="post">
					<div class="form-group">
						<input type="text" class="form-control " name="username" value="" placeholder="Tên đăng nhập" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control " name="password" placeholder="Mật khẩu" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="repassword" placeholder="Xác nhận mật khẩu" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Đăng ký</button>
					</div>
					<div class="form-group mb-0">
						<a class="btn btn-link" href="/nick.txt">Danh Sách Nick Có Sẵn</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>