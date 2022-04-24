<!--<div style="clear:both" class="panel panel-default">
    <div class="panel-body">
      Panel content
    </div>
    <div class="panel-footer">Panel footer</div>
  </div>-->
  <div class="container-fluid flex-grow-1 flex-shrink-0">
    <div class="px-lg-5">
      <div class="row py-5">
        <div class="col-lg-12 mx-auto text-white text-center">
          <h1 class="display-4" style="color: white"></h1>
          <p class="lead mb-0">Bizi Tercih Ettiğiniz için Teşekkürler</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End -->


  <!-- Footer -->
  <footer style="background: linear-gradient(to right, rgb(225, 219, 219), rgb(73, 73, 73))" class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><br>
          <div id="map" style="width: 100%"><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" >shipping gps</a></iframe></div>
          <p class="font-italic text-muted">Ulaşım Bilgilerimiz</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>Twitter</li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>Facebook</li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a>İnstagram</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Canke Design</h6>
          <p class="text-muted mb-4">KALİTE İLE BULUŞMANIN ADRESİ</p>

           <!--https://www.youtube.com/watch?v=nuSQGu-uNQw -->
           <!--
          $LocationArray = json_decode( file_get_contents('http://ip-get-geolocation.com/api/json/35.188.125.133'), true);
echo $LocationArray['city'];

src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/marine-gps/"
          -->
          <?php
$ip_address=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city'];
$country = $addrDetailsArr['geoplugin_countryName'];

if(!$city){
  $sehir='Istanbul';
}if(!$country){
  $sehir='Istanbul';
}
else {
  $sehir=$city;
}

          $api_key='59e7ef6817e597c0ef43c2beeba66856';
          $api_url='http://api.openweathermap.org/data/2.5/weather?q='.$sehir.'&appid='.$api_key;

          $weather_data=json_decode(file_get_contents($api_url),true);

          $temp=$weather_data['main']['temp'];

          $tempInC=round($temp-273.15);

          $tempCW=$weather_data['weather'][0]['main'];

          $tempCWD=$weather_data['weather'][0]['description'];
          
          $tempCWI=$weather_data['weather'][0]['icon'];

          echo "Anlık İstanbul Hava Durumu: " .$tempInC."°C";
          ?>
        </div>
      </div>
    </div>


<style>
  #map{
    width: 200px;
    height: 200px;
  }
</style>
  

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script>
  let mapOptions={
    center:[51.958, 9.141],
    zoom: 1
  }
  let map=new L.map('map',mapOptions);
  let layer= new L.TileLayer('{s}.title.openstreetmap.org/{z}/{x}/{y}.png');
  map.addLayer(layer);

  let marker= new L.Marker([51.958, 9.141]);
  marker.addTo(map);
</script>
<script></script>


    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2022 CanKe Design Tüm Haklar Saklıdır.</p>
      </div>
    </div>
  </footer>

</body>