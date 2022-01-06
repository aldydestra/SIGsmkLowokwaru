<?php
$title = "Peta Sebaran SMK";
include_once "header.php";
include_once "navbar.php"
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h6 class="panel-title"><strong> SEBARAN SMK DI KECAMATAN LOWOKWARU KOTA MALANG </strong></h6>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script type="text/javascript">
  function initialize() {
    
    var mapOptions = {   
        zoom: 8,
        center: new google.maps.LatLng(-7.9812985, 112.6319264), 
        disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, sekolahLocations);

}

var sekolahLocations = [
<?php
$data = file_get_contents('http://localhost/smklowokwaru/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>
[<?php echo $item->id_sekolah ?>,'<?php echo $item->nama_sekolah ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    var globalPin = 'img/marker.png';

    for (var i = 0; i < locations.length; i++) {
       
        var sekolah = locations[i];
        var myLatLng = new google.maps.LatLng(sekolah[4], sekolah[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ sekolah[1] + '</h5>'+
            '<div id="bodyContent">'+ 
            '<a href=detail.php?id='+sekolah[0]+'>INFORMASI</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: sekolah[1],
            icon:'img/marker.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>