<?php $this->extend('layout_app')?>
<?php $this->section('content')?>
	<section class="py-5">
		<div class="container py-5">
			<h1>Selamat Datang <?= session('username')?></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia reprehenderit reiciendis sit rem unde, quia odio, harum, iusto placeat corporis sed? Commodi, excepturi soluta, vel nisi possimus mollitia suscipit eaque.</p>
		</div>
	</section>
<?php $this->endSection()?>