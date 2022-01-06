<html>
<?php
$title= "Login Admin";
?>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>Login</title>
</head>
<body>
<?php include_once "header.php" ?>
<div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
			  <div class="panel-heading">
              <h2 class="panel-title centered"><strong> <?php echo $title ?> </strong></h2>
            </div>
			<h2> <center>Login untuk membuka akses penuh pemutakhiran data</center></h2>
		  
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
	<table align="center">
    <tbody bgcolor="red">
			<tr>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary btn-user btn-block" type="submit" name="LOGIN"> LOGIN<button</td>
            </tr>
            </div>
            <a href="index.php">Kembali Ke Home</a>
</tbody>
		</table>			
	</form>
	<?php include_once "footer.php" ?>
</body>
</html>