<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>::Edit Data Mahasiswa::</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		<div class="container">
			<h2>Perubahan Produk</h2><br />
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div><br />
			@endif
			<form method="post" action="{{action('MahasiswaController@update', $id)}}">
			{{csrf_field()}}
				<input name="_method" type="hidden" value="PATCH">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Name:</label>
						<input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nim">NPM:</label>
						<input type="text" class="form-control" name="nim" value="{{$mahasiswa->nim}}">
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
