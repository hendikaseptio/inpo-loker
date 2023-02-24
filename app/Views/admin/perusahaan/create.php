<?php $this->extend('layout_app')?>
<?php $this->section('content')?>
	<section class="py-5">
		<div class="container py-5">
			<h1>Tambah Data Perusahaan</h1>
			<div class="card">
				<div class="card-header bg-primary text-white">Form Perusahaan Baru</div>
				<div class="card-body">
					<?= session()->getFlashdata('error') ?>
					<div class="text-danger">
						<?= validation_list_errors() ?>
					</div>					
					<form action="/admin/perusahaan/simpan" method="post" enctype="multipart/form-data">
						<?= csrf_field() ?>
						<div class="mb-3">
							<label for="nama">Nama Perusahaan</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Inputkan Nama Perusahaan" value="<?= set_value('nama')?>">
						</div>
						<div class="mb-3">
							<label for="alamat">Alamat Perusahaan</label>
							<textarea name="alamat" id="alamat" class="form-control" placeholder="Inputkan Alamat Perusahaan" cols="30" rows="10"><?= set_value('alamat')?></textarea>
						</div>
						<div class="mb-3">
							<label for="logo">Logo Perusahaan</label>
							<input type="file" name="logo" id="logo" class="form-control" placeholder="Inputkan logo Perusahaan">
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php $this->endSection()?>