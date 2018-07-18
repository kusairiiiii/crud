<!-- tambah.blade.php -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::Tambah Data Mahasiswa::</title>
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
		<h2>Penambahan Data Mahasiswa</h2><br/>
			<?php if($errors->any()): ?>
				<div class="alert alert-danger">
					<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div><br />
			<?php endif; ?>
			<?php if(\Session::has('success')): ?>
				<div class="alert alert-success">
					<p><?php echo e(\Session::get('success')); ?></p>
				</div><br />
			<?php endif; ?>
			<form method="post" action="<?php echo e(url('mhs')); ?>">
			<?php echo e(csrf_field()); ?>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="nama">Nama:</label>
					<input type="text" class="form-control" name="nama">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="nim">NPM:</label>
					<input type="text" class="form-control" name="nim">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success" style="margin-left:38px">Simpan Data</button>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>
