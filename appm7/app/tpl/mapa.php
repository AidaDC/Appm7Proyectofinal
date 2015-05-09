<style>
#mimapa{
  width:300px;
  height:300px;}

</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&libraries=places"></script>

<input type="text" id="cajabusqueda" size="50" placeholder="Introduce la ciudad que quieras buscar">
<div id="mimapa"></div>
<script>
var mapa=new google.maps.Map(document.getElementById('mimapa'),{
center:{
  lat:41.3037026,
  lng: 2.0033665
  },
  zoom:18
});
//añadir marcador
var marker=new google.maps.Marker({
  position:{
    lat:41.3037026,
    lng: 2.0033665
  },
  map:mapa,
  draggable:true
});
//buscar direccion y colocarlo en el mapa
var searchBox=new google.maps.places.SearchBox(document.getElementById('cajabusqueda'));
//colocamos el cambio de evento de la caja
google.maps.event.addListener(searchBox,'places_changed',function(){
  var sitios=searchBox.getPlaces();
  var bordes=new google.maps.LatLngBounds();
  var i, place;
  for(i=0;place=sitios[i];i++){
  bordes.extend(place.geometry.location);
  marker.setPosition(place.geometry.location);  
  }
  
  mapa.fitBounds(bordes);
  mapa.setZoom(20);
  
  })


</script>

