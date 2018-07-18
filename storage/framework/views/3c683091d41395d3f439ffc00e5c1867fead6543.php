<!-- index.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::Data Mahasiswa::</title>
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
		<br />
		<?php if(\Session::has('success')): ?>
			<div class="alert alert-success">
				<p><?php echo e(\Session::get('success')); ?></p>
			</div><br />
		<?php endif; ?>
		<h3>DATA MAHASISWA</h3>
		<a href="<?php echo e(url('mhs/create')); ?>" class="btn btn-success">Tambah Data</a>
		<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>NPM</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($mhs['id']); ?></td>
				<td><?php echo e($mhs['nama']); ?></td>
				<td><?php echo e($mhs['nim']); ?></td>
				<td><a href="<?php echo e(action('MahasiswaController@edit', $mhs['id'])); ?>" class="btn btn-warning">Ubah</a></td>
				<td>
					<form action="<?php echo e(action('MahasiswaController@destroy', $mhs['id'])); ?>" method="post">
					<?php echo e(csrf_field()); ?>

						<input name="_method" type="hidden" value="DELETE">
						<button class="btn btn-danger" type="submit">Hapus</button>
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
		</table>
		</div>
	</body>
</html>
