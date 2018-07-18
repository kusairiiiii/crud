<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::Edit Data Mahasiswa::</title>
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
			<h2>Perubahan Produk</h2><br />
			<?php if($errors->any()): ?>
				<div class="alert alert-danger">
					<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div><br />
			<?php endif; ?>
			<form method="post" action="<?php echo e(action('MahasiswaController@update', $id)); ?>">
			<?php echo e(csrf_field()); ?>

				<input name="_method" type="hidden" value="PATCH">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Name:</label>
						<input type="text" class="form-control" name="nama" value="<?php echo e($mahasiswa->nama); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nim">NPM:</label>
						<input type="text" class="form-control" name="nim" value="<?php echo e($mahasiswa->nim); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<button type="submit" class="btn btn-success" style="margin-left:38px">Update Mahasiswa</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
