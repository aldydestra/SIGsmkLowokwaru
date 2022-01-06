<!DOCTYPE html>
<html>
<?php
$title = "Admin";
include "header.php";
include "navbar.php";
session_start();
    if($_SESSION['status']!="login")
    {
		header("location:login.php?pesan=belum_login");
	}
?>
<section>
<div class="container">
			<div class="panel-heading">
              <h3 class="glyphicon glyphicon-edit"><strong>TAMBAH DATA</strong></h3>
                <form class="form-horizontal" method="POST" action="tambah_aksi.php">
                    <div class="form-group" align="center">
                        <label class="col-sm-4 control-label">Nama Sekolah</label>
                            <div class="col-sm-3">
                                <input type="hidden" name="id_sekolah">
                                <input type="text" class="form-control" name="nama_sekolah" autocomplete="off" required>
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <label class="col-sm-4 control-label">KATEGORI</label>
                                  <div class="col-sm-3">
                                    <select class="form-control" name="kategori" placeholder="Pilih Kategori Sekolah" required>
                                      <option value=""></option>
                                      <option value="NEGERI">NEGERI</option>
                                      <option value="SWASTA">SWASTA</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Website</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control" name="website" autocomplete="off" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">No. Telepon</label>
                                  <div class="col-sm-2">
                                    <input type="text" class="form-control" name="no_telp" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Alamat</label>
                                  <div class="col-sm-3">
                                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jurusan</label>
                                  <div class="col-sm-3">
                                  <textarea class="form-control" name="jurusan" rows="3" required></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Kelurahan</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control" name="kelurahan" autocomplete="off" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Latitude</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control" name="latitude" autocomplete="off" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Longitude</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control" name="longitude" autocomplete="off" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-offset-6 col-sm-10">
                                    <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                    <a href="indexadmin.php" class="btn btn-default btn-reset">Batal</a>
                                  </div>
                                </div>
                              </form>
                            </div> <!-- /.panel-body -->
                          </div> <!-- /.panel -->
                        </div> <!-- /.col -->
                      </div> <!-- /.row -->

</section>

<?php
include "footer.php";
?>