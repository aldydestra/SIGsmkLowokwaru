<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$kat="";
$web="";
$hp="";
$alamat="";
$jurusan="";
$kelur="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_sekolah;
  $ids.=$item->id_sekolah;
  $kat.=$item->kategori;
  $web.=$item->website;
  $hp.=$item->no_telp;
  $alamat.=$item->alamat;
  $jurusan.=$item->jurusan;
  $kelur.=$item->kelurahan;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php";
include_once "navbar.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h4 class="panel-title"><strong> Informasi Sekolah </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Keterangan</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Sekolah</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Kategori</td>
                 <td><h4><?php echo $kat ?></h4></td>
               </tr>
               <tr>
                 <td>Jurusan</td>
                 <td><h4><?php echo $jurusan ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No Telp</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

          <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h4 class="panel-title"><strong> Lokasi </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
    <?php include_once "footer.php"; ?>