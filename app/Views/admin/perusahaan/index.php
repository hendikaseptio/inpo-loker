<?php $this->extend('layout_app')?>
<?php $this->section('content')?>
	<section class="py-5">
		<div class="container py-5">
			<h1>Data Perusahaan</h1>
			<a href="/admin/perusahaan/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
			<hr>
			<?php if(session()->getFlashdata('success')) {?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Sukses!</strong> <?= session()->getFlashdata('success')?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php }?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Logo</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($perusahaan as $p) { ?>
						<tr>
							<td><?= $no++ ?>.</td>
							<td><img src="/img/brand/<?= $p['logo'] ?>" width="40px" height="40px" alt=""></td>
							<td><?= $p['nama'] ?></td>
							<td><?= $p['alamat'] ?></td>
							<td>
								<a href="/admin/perusahaan/edit/<?= $p['id']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
								<a href="/admin/perusahaan/hapus/<?= $p['id']?>" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
							</td>
						</tr>	
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
<?php $this->endSection()?>