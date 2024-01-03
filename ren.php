<?php
$_title = 'Sửa thông tin tài khoản';
include_once 'head.php';
$_alert = null;
if($_login == null) {header("location:/");}

if(isset($_POST['user']))
{
	$user = isset_sql($_POST['user']);
	
		$read = _select("*",'ninja',"name='$user'");
		$thai = json_decode($ninja,true);
		$read1 = _select("*",'clone_ninja',"name='$user'");
		
		        
				if(is_array(_fetch($read)))
				{
					$_alert = _alert('err',"Nhân vật này đã tồn tại, vui lòng chọn nhân vật khác !");
				}
				else
				{ 
			     if(mb_strlen($user, 'UTF-8') < 1 || mb_strlen($user, 'UTF-8') > 15 )
		         {
			     $_alert = _alert('err',"Nhân vật phải từ 1-16 ký tự !");
		        }
		       else
		        { 
					
			$name = '["'.$user.'"]';		
			$query = _query(_update('player',"ninja='$name'","username='$_username'"));
			$query = _query(_update('ninja',"name='$user'","name='$thai[0]'"));
			$query = _query(_update('clone_ninja',"name='$user'","name='$thai[0]'"));
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

?>
<main class="flex-grow-1 flex-shrink-1">
	<div class="bg-light">
		<div class="container">
			<ol class="breadcrumb bg-transparent rounded-0">
				<li class="breadcrumb-item"><a href="/user.php">Thông tin tài khoản</a></li>
				<li class="breadcrumb-item active">Đổi tên nhân vật</li>
			</ol>
		</div>
	</div>
	
	<div class="container">
		<div class="card mb-3">
			<?php echo $_alert; ?>
			<div class="card-header">Đổi tên nhân vật</div>
			<ul class="list-group mb-3">
			<li class="list-group-item d-flex"> 
			<div class="w-50">Chú Ý bạn nào là chủ gia tộc k nên sử dụng tính năng này nhé, mất tộc trưởng ad k chịu trách nhiệm đâu và STOP vui lòng thoát game trước khi đổi tên nhân vật nhé lỗi gí k vào game ad k chịu tránh nhiệm đâu nhé </div>
			</li>
		</ul>
				<div class="card-body">
				<form method="post">
					<div class="form-group">
						<label class="font-weight-bolder" for="user">Tên nhân vật mới</label>
						<input type="text" class="form-control " name="user" id="user" placeholder="Tên nhân vật mới" required>
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