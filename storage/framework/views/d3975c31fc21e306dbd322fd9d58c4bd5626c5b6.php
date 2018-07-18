<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
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
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>NIM</th>
<th colspan="2">Action</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $mahasiwas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($mahasiswa['id']); ?></td>
<td><?php echo e($mahasiswa['nama']); ?></td>
<td><?php echo e($mahasiswa['nim']); ?></td>
<td><a href="<?php echo e(action('MahasiswaController@edit', $mahasiswa['id'])); ?>"
class="btn btn-warning">Ubah</a></td>
<td>
<form
action="<?php echo e(action('MahasiswaController@destroy',
$mahasiswa['id'])); ?>" method="post">
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
