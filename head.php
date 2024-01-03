<?php
ob_start();
error_reporting(0);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once 'cauhinh.php';
include_once 'config.php';
include_once 'set.php';
?>
<!doctype html>
<html lang="en">
<head>
<meta property='og:image' content='http://familynso.xyz/img/logo-alt.jpg' />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="Bnokvfoe0nRbXdt0IxpeOTLdt4KafTn2kVI3yayo">
	<title><?php echo $_title; ?></title>
<link rel="shortcut icon" href='http://27.0.14.78/dl/image/iconninja32.png' type="image/x-icon" />
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="wrapper d-flex flex-column">
		<header class="header border-bottom">
			<nav class="navbar navbar-expand-sm navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="/img/logo.png" alt="logo web">
					</a>
					<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#siteNav">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="siteNav">
						<div class="d-flex justify-content-center ml-sm-auto mx-n1 my-2">
						    <a class="p-2 text-dark" data-toggle="modal" data-target="#modalDownload">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
									</svg>
									<span>Tải Game</span>
								</a>
							<?php if($_login == null) { ?>
								<nav class="my-2 my-md-0 mr-md-3">
								<a class="btn btn-outline-success" href="/login.php">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
									</svg>
									<span>Đăng nhập</span>
								</a>
								<a class="btn btn-outline-danger" href="/reg.php">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
									</svg>
									<span>Đăng ký</span>
								</a>
							<?php } else { ?>
								<a class="btn btn-success mx-1" href="/user.php">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
									</svg>
									<span>Tài khoản</span>
								</a>
								<a class="btn btn-success mx-1" href="/?out" >
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
									</svg>
									<span>Đăng xuất</span>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modalDownload" tabindex="-1" style="display: none;" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">Tải game</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="list-group">
									<a href="https://vietup.net/tap-tin/auto-hs-sv-free-13-16-jar/257393" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho JAVA hồi sinh lượng</a>
									<a href="https://drive.google.com/file/d/16bmwTKuAfAF_tvI2PyJcekBN-G0FTW-F/view?usp=sharing" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho Android gốc </a>
									
									<!--<a href="/filegame/BUFF159KHSL1.jar" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho JAVA không hồi sinh lượng</a>
									<a href="/filegame/BUFF159KHSL2.jar" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho JAVA không hồi sinh lượng 2</a>
									<a href="https://timiblog.com/category/nso-buffteam/" class="list-group-item list-group-item-action"><i class="fas fa-link mr-2"></i>Các bản mod auto từ TimiBlog</a>
									<a href="https://www.wapnbk.pro/2021/08/phien-ban-fix-login-server-buffteam-va.html" class="list-group-item list-group-item-action"><i class="fas fa-link mr-2"></i>Các bản mod auto từ NBK</a>-->						
									<!--<a href="/filegame/Buffteam1.apk" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho Android hack (server 2) (mod by Đức)</a>
									<a href="/filegame/BuffteamGoc.apk" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho Android gốc (server 2) (mod by Tân Talent)</a>
									<a href="/filegame/buffteam.rar" class="list-group-item list-group-item-action"><i class="fab fa-windows mr-2"></i>Tải về phiên bản cho PC (lỗi vdmq)</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
