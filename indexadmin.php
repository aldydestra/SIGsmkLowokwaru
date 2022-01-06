<!DOCTYPE html>
<html>
<?php
$title = "Admin";
include_once "koneksi.php";
include_once "header.php";
include_once "navbar.php";
?>
<div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h6 class="panel-title"><strong> DATA SMK DI LOWOKWARU </strong></h6>
            </div>
            <div class="panel-body">
            	<?php 
					session_start();
					if($_SESSION['status']!="login"){
						header("location:login.php?pesan=belum_login");
					}
					?>
					<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
					<div class="container">
		              <table class="table table-bordered table-striped table-admin">
		              <thead>
		                <tr>
		                  <th width="2%"><center>No.</th>
		                  <th width="10%"><center>Nama Sekolah</center></th>
		                  <th width="5%"><center>Aksi</center></th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php
		                $data = file_get_contents('http://localhost/smklowokwaru/ambildata.php');
		                $no=1;
		                if(json_decode($data,true)){
		                  $obj = json_decode($data);
		                  foreach($obj->results as $item){
		              ?>
		              <tr>
		                <td><center><?php echo $no; ?></center></td>
		                <td><?php echo $item->nama_sekolah; ?></td>
		                <td class="ctr">
							<a class = "btn btn-primary" href="update.php?id=<?php echo $item->id_sekolah; ?>" >UPDATE</a>
							<a class = "btn btn-primary" href="delete.php?id=<?php echo $item->id_sekolah; ?>">HAPUS</a>
		                </td>
		              </tr>
		              <?php $no++; }}
		              else{
		                echo "data tidak ada.";
		                } ?>
		              </tbody>
		            </table>
		
		        </div>
	<a class = "btn btn-primary btn-lg" href="tambah.php">TAMBAH DATA</a>		
	<a class = "btn btn-primary btn-lg" href="logout.php">LOGOUT</a>

</div>
</div>
</div>
</body>
</html>
<?php include_once "footer.php"?>