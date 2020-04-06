  mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoaXNoZWswMDUiLCJhIjoiY2s4bnp1N3ZqMDBndTNqcHM2eXliaHoyayJ9.4ZQB62OZG8dhnUcbF11smQ';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v10',
    zoom: 3.5,
    center: [80,22]
  });


function updateMap() {
    console.log("Updating map with realtime data")
    fetch("/data.json")
        .then(response => response.json())
        .then(rsp => {
            // console.log(rsp.data)
            rsp.data.forEach(element => {
                latitude = element.latitude;
                longitude = element.longitude;

                cases = element.infected;
                if (cases>255){
                    color = "rgb(255, 0, 0)";
                }

                else{
                    color = `rgb(${cases}, ${cases}, 0)`;
                }

                // Mark on the map
                new mapboxgl.Marker({
                    draggable: false,
                    color: color
                }).setLngLat([longitude, latitude])
                .addTo(map); 
            });
        })
}

let interval = 20000;
setInterval( updateMap, interval); 