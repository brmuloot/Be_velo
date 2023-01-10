

var url = "https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=7018246f6b890059c7d114932e450edab1ee00ee"
var map = L.map('map').setView([45.764043, 4.835659], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


fetch(url)
.then(function(response) {
  return response.json();
})
.then(function(data) {
  data.forEach(function(station) {
    var marker = L.marker([station.position.lat, station.position.lng],).addTo(map);
    marker.on('click', function() {
        document.getElementsByClassName('status-square')[0].innerHTML = `
        <h1>INFO STATION"</h1>
        <h2>Nom de la station :</h2> 
        <p> ${station.name}</p>
        <h2>État :</h2> 
        <p> ${station.status}</p>
        <h2>Vélos disponibles :</h2> <p> ${station.available_bikes}</p>
        <h2>Places disponibles :</h2><p>${station.available_bike_stands}</p>
      `;
    });
  });
});

