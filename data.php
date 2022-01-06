<?php 
$title = "Daftar SMK Lowokwaru";
include_once "header.php";
include_once "koneksi.php";
include_once "navbar.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading">
              <h2 class="panel-title centered"><strong> <?php echo $title ?> </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="2%">No.</th>
                  <th width="30%"><center>Nama Sekolah</center></th>
                  <th width="10%"><center>Kategori</center></th>
                  <th width="20%"><center>Website</center></th>
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
                <td><center><?php echo $item->kategori; ?></center></td>
                <td><?php echo $item->website; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="_blank" href="detail.php?id=<?php echo $item->id_sekolah; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i>Informasi Lengkap</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>