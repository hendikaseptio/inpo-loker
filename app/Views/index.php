<?php $this->extend('layout_app')?>	
<?php $this->section('content')?>	
	<section id="banner">
		<div class="container h-100">
			<div class="d-flex h-100 align-items-center text-white">
				<div class="col-6 m-auto text-center">
					<h1>Dapatkan pekerjaan yang kamu impikan !</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt beatae labore adipisci veniam aperiam ipsa dolorem est deleniti in voluptatum temporibus corporis eveniet laborum tempora corrupti, accusantium, recusandae praesentium rem.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="loker" class="py-5">
		<div class="container">
			<h1>Lowongan Kerja</h1>
			<p>Kami Menyediakan Berbagai Macam Lowongan Kerja Buat Kamu</p>
			<div class="card shadow">
				<div class="card-body">
					<p>Cari Loker berdasarkan perusahaan atau nama pekerjaan</p>
					<form action="">
						<div class="row">
							<div class="col-5">
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
							<div class="col-5">
								<input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
							</div>
							<div class="col-2">
								<div class="d-grid">
									<button class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-4 col-sm-6">
					<div class="card shadow">
						<div class="card-body">
							<img src="/img/brand/pertamina.jpeg" class="img-fluid" alt="" width="70px" height="70px">
							<h5 class="text-primary mt-3">Staf Administrasi</h5>
							<p>PT.Pertamina</p>
							<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Ad illum, corporis temporibus odit unde eius.</p>
							<a href="" class="btn btn-primary"><i class="fa fa-folder-open"></i> Detail</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="card shadow">
						<div class="card-body">
							<img src="/img/brand/pertamina.jpeg" class="img-fluid" alt="" width="70px" height="70px">
							<h5 class="text-primary mt-3">Staf Administrasi</h5>
							<p>PT.Pertamina</p>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, quis dolorem ad et dolores, animi.</p>
							<a href="" class="btn btn-primary"><i class="fa fa-folder-open"></i> Detail</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="card shadow">
						<div class="card-body">
							<img src="/img/brand/shopeefood.png" class="img-fluid" alt="" width="70px" height="70px">
							<h5 class="text-primary mt-3">Programmer Front End</h5>
							<p>PT.Shoppe Indonesia</p>
							<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Autem perspiciatis doloribus reiciendis officiis aperiam quibusdam!</p>
							<a href="" class="btn btn-primary"><i class="fa fa-folder-open"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $this->endSection()?>	
