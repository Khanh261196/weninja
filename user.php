<?php
$_title = "Thông tin tài khoản !";
include_once 'head.php';
if($_login == null) {header("location:/login.php");}
$_active = isset($_active) ? $_active : null;
?>
<main class="flex-grow-1 flex-shrink-1">
	<div class="bg-light">
		<div class="container">
			<ol class="breadcrumb bg-transparent rounded-0">
				<li class="breadcrumb-item active">Thông tin tài khoản</li>
			</ol>
		</div>
	</div>
	<div class="container">
		
		<ul class="list-group mb-3">
			<li class="list-group-item d-flex">
				<div class="w-50">Tài khoản:</div>
				<div class="w-50"><?php echo $_username; ?></div>
			</li>
			<li class="list-group-item d-flex">
				<div class="w-50">Số dư:</div>
				<div class="w-50"><?php echo $_coin; ?> coin</div>
			</li>
			</ul>
		<div class="text-center">
		  <a href="/ren.php" class="btn btn-sm btn-primary mb-1">Đổi tên nhân vật</a>
		    <a href="/reuser.php" class="btn btn-sm btn-primary mb-1">Đổi tài khoản</a>
			<a href="/repass.php" class="btn btn-sm btn-primary mb-1">Đổi mật khẩu</a>
			</div>
	</div>
</main>

<?php
include_once 'end.php';
?>