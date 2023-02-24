<?php $this->extend('layout_app')?>
<?php $this->section('content')?>
	<section class="py-5">
		<div class="container py-5">
			<h1>Edit Data Perusahaan</h1>
			<div class="card">
				<div class="card-header bg-primary text-white">Form Edit Perusahaan</div>
				<div class="card-body">
					<?= session()->getFlashdata('error') ?>
					<div class="text-danger">
						<?= validation_list_errors() ?>
					</div>					
					<form action="/admin/perusahaan/update/<?= $perusahaan['id']?>" method="post" enctype="multipart/form-data">
						<?= csrf_field() ?>
						<div class="mb-3">
							<label for="nama">Nama Perusahaan</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Inputkan Nama Perusahaan" value="<?= (!empty(set_value('nama')))?set_value('nama'):$perusahaan['nama']  ?>">
						</div>
						<div class="mb-3">
							<label for="alamat">Alamat Perusahaan</label>
							<textarea name="alamat" id="alamat" class="form-control" placeholder="Inputkan Alamat Perusahaan" cols="30" rows="10"><?= (!empty(set_value('alamat')))?set_value('alamat'):$perusahaan['alamat'] ?></textarea>
						</div>
						<div class="mb-3">
							<label for="logo">Logo Perusahaan</label>
							<input type="file" name="logo" id="logo" class="form-control" placeholder="Inputkan logo Perusahaan">
							<small>Silahkan Upload lagi jika ingin mengganti logo yang sudah ada</small>
							<br><img src="/img/brand/<?= $perusahaan['logo'] ?>" width="60px" height="60px" alt="">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php $this->endSection()?>