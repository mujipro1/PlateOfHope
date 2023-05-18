var marker;

function initMap(lat, lng) {
    var location = { lat: lat, lng: lng };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: location
    });

    marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true // Allow marker to be dragged
    });

    google.maps.event.addListener(marker, 'dragend', function() {
        var newLocation = marker.getPosition();
        var newLat = newLocation.lat();
        var newLng = newLocation.lng();
        getCity(newLat, newLng);

        // Call your function or perform any other action with the new coordinates
    });
}

function getCity(lat, lon){
    API_key = 'ece9cdbfa0de4b392616030d1b71b294'

    url = `http://api.openweathermap.org/geo/1.0/reverse?lat=${lat}&lon=${lon}&limit=1&appid=${API_key}`

    fetch(url)
    .then(response => response.json())
    .then(data =>setCity(data[0].name)) 
    .catch(err => console.warn(err.message))
}

function setCity(cityName){
    // get all option menus of city dropdown
    citySelect = document.getElementById('citySelect');
    var cityOptions = document.querySelectorAll('#citySelect option');
    for (var i = 0; i < cityOptions.length; i++) {
        if (cityOptions[i].innerText === cityName.split(' ')[0]) {
            citySelect.value = cityName;
            break;
        }
    }

}

var apiKey = 'ece9cdbfa0de4b392616030d1b71b294'
var city = 'islamabad';
var url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;

fetch(url)
    .then(response => response.json())
    .then(data => {
        var lat = data.coord.lat;
        var lng = data.coord.lon;
        initMap(Number(lat), Number(lng));
    })
    .catch(err => console.warn(err.message));