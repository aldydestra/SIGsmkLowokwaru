<?php
include "koneksi.php";
$Q = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM smk")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>