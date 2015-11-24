<?php

echo "<html>";
echo "<head>";
echo "<style type='text/css'>
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div id='map'>";
echo "</div>";
echo "<script type='text/javascript'>
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}";
echo "</script>";
 echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDdQxcqtVk98BQatJ-BzyIIaHyQqCLwv34&callback=initMap'>";
 echo "</script>";
echo "</body>";
echo "</html>";

?>