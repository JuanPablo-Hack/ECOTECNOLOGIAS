var map = L.map("map");
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);
map.fitBounds([
  [19.081587, -104.303856],
  [9.081587, -104.303856],
]);
L.geolet({
  position: "bottomleft",
}).addTo(map);
var marker = L.marker();
function onMapClick(e) {
  marker
    .setLatLng(e.latlng)
    .bindPopup(
      "Coordenadas de servicio" +
        " Latitud: " +
        e.latlng.lat.toString() +
        " Longitud: " +
        e.latlng.lng.toString()
    )
    .openPopup()
    .addTo(map);
  var lat = e.latlng.lat.toString();
  var lng = e.latlng.lng.toString();
  document.getElementById("latitud").value = lat;
  document.getElementById("longitud").value = lng;
}
map.on("click", onMapClick);
