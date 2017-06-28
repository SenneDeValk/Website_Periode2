	<div class="sectie6">
	<h1  class="vijfdeTekst1 wow fadeInleft"> Verzameling van dingen die ik heb geleerd. </h1> 
	<!-- ---------------- Script google maps div ------------------------ -->
	<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 52.215998, lng: 6.150209};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru,
		  heading: 90,
		  styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]

        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_evLcTXGzErahxSCqwdqlr9z59jylXCo&callback=initMap">
    </script>
	<style>
	.error{
		color: #f00;
		font-weight: bold;
	}
	input.error{
		background-color: #FCC;
		color: #000;
	}
	input.valid{
		background-color: #99FF00;
	}
</style>	
<!-- dat was maps -->
<!-- ander voorbeeld -->	
    <h1  class="vijfdeTekst2 wow fadeInRight"> Google maps </h1>
	<h1  class="vijfdeTekst3 wow fadeInRight"> Dit is google maps. <br> Ik heb de locatie op mijn huis gezet <br> en een custom skin toegevoegd. </h1>
	<h1  class="tekst wow fadeIn" > date() en time() </h1>
	<h1  class="tekstUitleg wow fadeIn" > De date en time methodes <br> zorgen er voor dat ik de datum <br> van vandaag kan laten zien </h1>
	<div class="dateTime wow fadeIn">
		 <?php
	echo "<h1 style='z-index: 1; left: 1%;'>" . date("d/m/Y") . "<br>";
	echo "Is de datum van vandaag <br>";
	echo date("h:i:sa") . "<br>";
	echo "Today is " . date("l") . "</h1>";
	?>
	</div>