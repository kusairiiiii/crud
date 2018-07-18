<!-- index.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::Data Mahasiswa::</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		<div class="container">
		<br />
		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div><br />
		@endif
		<h3>DATA MAHASISWA</h3>
		<a href="{{url('mhs/create')}}" class="btn btn-success">Tambah Data</a>
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
			@foreach($mahasiswa as $mhs)
			<tr>
				<td>{{$mhs['id']}}</td>
				<td>{{$mhs['nama']}}</td>
				<td>{{$mhs['nim']}}</td>
				<td><a href="{{action('MahasiswaController@edit', $mhs['id'])}}" class="btn btn-warning">Ubah</a></td>
				<td>
					<form action="{{action('MahasiswaController@destroy', $mhs['id'])}}" method="post">
					{{csrf_field()}}
						<input name="_method" type="hidden" value="DELETE">
						<button class="btn btn-danger" type="submit">Hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
		</div>
	</body>
</html>
