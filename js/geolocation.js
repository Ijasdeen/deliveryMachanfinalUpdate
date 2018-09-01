var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        navigator.geolocation.getCurrentPosition(defaultMap);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
     
    let latidude = position.coords.latitude;
    let longitude = position.coords.longitude;
    
  let totalMap = latidude+','+longitude
 
  document.getElementById('mymap').setAttribute('src','https://maps.google.com/maps?width=100%&height=400&hl=en&q='+totalMap+'&ie=UTF8&t=&z=14&iwloc=B&output=embed');    
    
}
   