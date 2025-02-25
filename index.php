<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        #map{
            width: 100%;
            height: 87vh;
            
        }
    </style>
    <title>Corona Map</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1 pl-3">COVID-19 Worldwide Status</span>
        <form class="form-inline">
            <button class="btn btn-outline-danger mr-5 mb-2" type="button">Red: Highly Affected Areas</button>
            <button class="btn btn-outline-warning mr-5 mb-2" type="button">Yellow: Moderate Affected Areas</button>
            <button class="btn btn btn-outline-secondary mr-5" type="button">Black: Least Affected Areas</button>
          </form>
    </nav>
    <h5 class="text-center">
        Please wait while loading...
    </h5>
    

    <div id='map'></div>
    
</body>


<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<script src="js/index.js"></script>
</html>
