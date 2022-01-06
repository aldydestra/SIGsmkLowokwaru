<?php
$title = "Ubah";
include_once "koneksi.php";
include_once "header.php";
include_once "navbar.php";

$id         = $_GET['id'];
$sekolah  = mysqli_query($koneksi, "select * from smk where id_sekolah='$id'");
$row        = mysqli_fetch_array($sekolah);

session_start();
    if($_SESSION['status']!="login")
    {
		header("location:login.php?pesan=belum_login");
	}
?>
					
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Sekolah</title>
    </head>
    <body>
    <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="update_aksi.php" method="POST">
            <input type="hidden" value="<?php echo $row['id_sekolah'];?>" name="id_sekolah">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Sekolah</label>
              <div class="col-sm-2">
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $row['nama_sekolah'];?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">KATEGORI</label>
              <div class="col-sm-3">
                <select class="form-control" name="kategori" placeholder="kategori" required>
                  <option value="">Pilih Kategori</option>
                  <?php
                  $ambildata = mysqli_query($koneksi, "SELECT DISTINCT kategori FROM smk order by kategori");  //ambil data dari tabel kategori
                  while($a=mysqli_fetch_array($ambildata)){   //buat perulangan
                      if($a['kategori'] == $b['kategori']){  //jika id kategori sama dengan id kategori dari variabel $b, maka option selected
                      ?>
                  <option value="<?php echo $a['kategori'];?>" selected>
                  <?php echo $a['kategori'];?></option>
                  <?php
                  }else{   //jika tidak sama maka option tidak selected
                ?>
                <option value="<?php echo $a['kategori'];?>">
                <?php echo $a['kategori'];?></option>
            <?php
                 }
            }
            ?>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Website</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="website" autocomplete="off" value="<?php echo $row['website']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_telp" autocomplete="off" maxlength="15" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $row['no_telp']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="alamat" rows="3" required><?php echo $row['alamat']; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jurusan</label>
              <div class="col-sm-3">
                <textarea type="text" class="form-control" name="jurusan" rows="3" required><?php echo $row['jurusan']; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kelurahan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="kelurahan" autocomplete="off" value="<?php echo $row['kelurahan']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Latitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="latitude" autocomplete="off" value="<?php echo $row['latitude']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Longitude</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="longitude" autocomplete="off" value="<?php echo $row['longitude']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="indexadmin.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
        </form>
        </div>
        </div>
    </body>
    <?php
    include_once "footer.php";
    ?>
</html>