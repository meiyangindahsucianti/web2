<?php 
session_start();
include 'koneksi.php';
	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password= sha1($_POST['password']);

		$sql_query= "select * from user where username ='$username' and password=$password'";

		if (mysql_query($sql_query)) {
			$num_row=mysql_num_rows(mysql_query($sql_query));
			if ($num_row ==1) {
				$SESSION ['username']=$username;
				?>
				<script type="text/javascript">
					alert('anda berhasil login');
					window.location.href="index.php";
				</script>
				<?php 
				}
			}
			else { ?>

				<script type="text/javascript">
					alert('maaf bukan anda');
					window.location.href="halaman_awal.php"
				</script>
				<?php 
			}
			}
		if (isset($POST['batal'])) {
			?>
			<script type="text/javascript">
				alert('terjadi eror');
				window.location.href="halaman_awal.php";
			</script>
			<?php
		}
?>


<?php
include 'koneksi.php';
	if(isset($_GET['delete_id']))
		$sql_query ="DELETE FROM siswa WHERE id=".$_GET['delete_id'];
		mysql_query($sql_query);
		header("location : $_SERVER [PHP_SELF]");

?>

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
<script type="text/javascript">
	function edit_id(id){
		if (confirm('serius ingin di modif bro')){
			window.location.href ='edit.php?edit_id='+id;
		}
	}
	function delete_id(id){
		if (confirm('serius ingin di hapus euy')) {
			window.location.href='index.php?delete_id'+id;
		}
	}
</script>
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
					<b>Web</b>   <small style="font-size:25px"> - membuat aplikasi crud</small>  
				</h1>
			</div>
			<br>
		</div>
	</div>
</div>

<!--  bagian Header menuu   -->
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-default" style="color: #1a237e">
					<li class="active" style="background-color: #b9f6ca">
						<a href="index.php">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li>
						<a href="tambah.php">&nbsp;menu 1&nbsp;</a>
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

<!--  bagian button   -->
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-12">
			<br><br><br><br>
			  <h2>Login</h2>        
			<form method="post">
				<table width="60%" align="center">
					<tr>
						<th align="center" colspan="2"> <a href="daftar.php"> <button class="button"> daftar </button></a></th>
					</tr>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" size="80"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" size="80"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="login" value="login"><input type="submit" name="batal" value="batal"></td>
					</tr>
				</table>
			</form>	  
		</div>
	</div>
</div>

</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>