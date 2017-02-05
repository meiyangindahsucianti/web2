<!DOCTYPE html>
<html>
<head>
<title> Halman Awal Operasi CRUD</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body style="background-color: #eeeeee">

<!--  bagian header  spasi -->
<div class="container">
	<div class="col-md-12"><br>
	</div>
</div>

<!--  bagian header Judul web   -->
<div class="container" style="background-color: #69f0ae">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<br><br>
				<h1>
					<b>Web</b>   <small style="font-size:25px"><i> - membuat aplikasi crud</i></small>  
				</h1><br>
			</div>
		</div>
	</div>
</div>

<!--  bagian Header menuu   -->
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-default" style="color: #1a237e">
					<li>
						<a href="index.html">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="active" style="background-color: #b9f6ca">
						<a href="#">&nbsp;Tambah Data&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="disabled">
						<a href="#">&nbsp;menu 2&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="disabled">
						<a href="#">&nbsp;menu 3&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
		</div>
	</div>
</div>

<!--  bagian spasi warna   -->
<div class="container" style="background-color: #b9f6ca">
<br><br><br>
</div>

<!--  bagian form input pendataan    -->
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-4">
			<h4 style="color: #1a237e"><i>Tambah data kamar</i></h4><br>
			<form>
					<div class="form-group form-group-default">
						<tr><td><label for="nomor-kamar">No. Kamar</label></td>
						<td><input type="text" style="height: 30px; width: 100px;" class="form-control" id="nomor_kamar"></td></tr>
					</div>
					<div class="form-group">
						<label for="nama_pegawai">Type Kamar</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="nama_pegawai">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Biaya kamar</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="jenis_kelamin">
					</div>
					<button type="submit" style="color: #000000" class="btn btn-info ">Simpan</button>
			</form>

		</div>
		<div class="col-md-4">
			<h4 style="color: #1a237e"><i>Tambah data pegawai</i></h4><br>
			<form>
					<div class="form-group form-group-default">
						<tr><td><label for="nomor_pegawai">No. Pegawai</label></td>
						<td><input type="text" style="height: 30px; width: 100px;" class="form-control" id="nomor_pegawai"></td></tr>
					</div>
					<div class="form-group">
						<label for="nama_pegawai">Nama Pegawai</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="nama_pegawai">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="jenis_kelamin">
					</div>
					<div class="form-group">
					<label for="alamat">Alamat</label>            
	    			<textarea class="form-control" style=" width: 200px;" id="alamat" name="textarea"></textarea>
	    			</div>
					<button type="submit" style="color: #000000" class="btn btn-info ">Simpan</button>
			</form>
		</div>
		<div class="col-md-4">
			<h4 style="color: #1a237e"><i>Tambah data pelanggan</i></h4><br>
			<form>
					<div class="form-group form-group-default">
						<tr><td><label for="nomor_pegawai">No. Pelanggan</label></td>
						<td><input type="text" style="height: 30px; width: 100px;" class="form-control" id="nomor_pegawai"></td></tr>
					</div>
					<div class="form-group">
						<label for="nama_pegawai">Nama Pelanggan</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="nama_pegawai">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Umur Pelanggan</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" id="jenis_kelamin">
					</div>
					<div class="form-group">
					<label for="alamat">Alamat</label>            
	    			<textarea class="form-control" style=" width: 200px;" id="alamat" name="textarea"></textarea>
	    			</div>
					<button type="submit" style="color: #000000" class="btn btn-info ">Simpan</button>
			</form>
		</div>
	</div>
</div>

</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>