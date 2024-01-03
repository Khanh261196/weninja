<?php
$_title = 'Sửa thông tin tài khoản';
include_once 'head.php';
$_alert = null;
if($_login == null) {header("location:/");}
if(isset($_POST['user']))
{
	$user = isset_sql($_POST['user']);
	
		$read = _select("*",'player',"username='$user'");
				if(is_array(_fetch($read)))
				{
					$_alert = _alert('err',"Tài khoản này đã tồn tại, vui lòng chọn tài khoản khác !");
				}
				else
				{
					if(mb_strlen($user, 'UTF-8') < 1 || mb_strlen($user, 'UTF-8') > 16 )
		         {
			     $_alert = _alert('err',"Tài khoản phải từ 1-16 ký tự !");
		        }
		       else
		        { if(!preg_match('/^[a-zA-Z0-9]+$/',$user))
		         {
			     $_alert = _alert('err',"Tài khoản không cho phép ký tự đặc biệt! !");
		        }
		       else
		        {
					
			$query = _query(_update('player',"username='$user'","username='$_username'"));
			if($query)
			{
				$_alert = _alert('succ',"Đổi thành công !");
			}
			else
			{
				$_alert = _alert('err',"Có lỗi gì đó xảy ra, vui lòng liên hệ admin !");
			}
		}
	}
}
}
?>
<main class="flex-grow-1 flex-shrink-1">
	<div class="bg-light">
		<div class="container">
			<ol class="breadcrumb bg-transparent rounded-0">
				<li class="breadcrumb-item"><a href="/user.php">Thông tin tài khoản</a></li>
				<li class="breadcrumb-item active">Đổi tên tài khoản</li>
			</ol>
		</div>
	</div>
	
	<div class="container">
		<div class="card mb-3">
			<?php echo $_alert; ?>
			<div class="card-header">Đổi tên tài khoản</div>
			<ul class="list-group mb-3">
			<li class="list-group-item d-flex">
				<div class="w-50">Tài khoản hiện tại:</div>
				<div class="w-50" class="font-weight-bolder"><?php echo $_username; ?></div>
			</li>
			</ul>
			<div class="card-body">
				<form method="post">
					<div class="form-group">
						<label class="font-weight-bolder" for="user">Tên tài khoản mới</label>
						<input type="text" class="form-control " name="user" id="user" placeholder="Tên tài khoản mới" required>
					</div>
					<div>
						<button type="submit" class="btn btn-primary">Đổi ngay</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php
include_once 'end.php';
?>