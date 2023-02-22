<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inpo Loker</title>
	<link rel="stylesheet" href="/assets/css/custom.css">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><i class="fa fa-handshake"></i> Inpo Loker</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<?php if(session('is_admin')) { ?>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="/admin/dashboard"><i class="fa fa-dashboard me-2"></i>Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="/admin/perusahaan"><i class="fa fa-city me-2"></i>Data Perusahaan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="/admin/loker"><i class="fa fa-file-alt me-2"></i>Data LoKer</a>
							</li>
						<?php } else { ?>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="/">Cari Lowongan Kerja</a>
							</li>
						<?php } ?>
					</ul>
					<div class="d-flex">
						<?php if(session('is_admin')) { ?>
							<a href="/logout" class="btn btn-sm btn-outline-danger"><i class="fa fa-sign-out-alt"></i> Keluar</a>
						<?php } else {?>
							<a href="/login" class="btn btn-sm btn-outline-light" type="submit"><i class="fa fa-sign-in-alt"></i> Masuk</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<?php $this->renderSection('content')?>
	
	<footer id="footer" class="py-5 bg-dark text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Tentang Kami</h3>
					<p><b>Inpo Loker</b> merupakan Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Laudantium cum sapiente modi illum asperiores perspiciatis quisquam, incidunt magni rerum quia. Asperiores fugiat harum iste officia non. Nihil aliquam veritatis odit.</p>
					<p>Hak Cipta &copy; 2023 | Inpo Loker</p>
				</div>
				<div class="col-md-4">
					<h3>Kontak Kami</h3>
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-dark text-white"><i class="fa fa-envelope"></i> InpoLoker45@gmail.com</li>
						<li class="list-group-item bg-dark text-white"><i class="fa fa-phone"></i> 08346-5837</li>
						<li class="list-group-item bg-dark text-white"><i class="fa fa-map-marker-alt"></i> Kec. Ampelgading, Kabupaten Pemalang, Jawa Tengah</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h3>Ikuti Kami</h3>
					<div class="d-flex">
						<a class="m-3 text-white fs-3" href=""><i class="fab fa-facebook"></i></a>
						<a class="m-3 text-white fs-3" href=""><i class="fab fa-twitter"></i></a>
						<a class="m-3 text-white fs-3" href=""><i class="fab fa-instagram"></i></a>
						<a class="m-3 text-white fs-3" href=""><i class="fab fa-youtube"></i></a>
						<a class="m-3 text-white fs-3" href=""><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>