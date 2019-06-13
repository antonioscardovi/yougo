<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style='border: 3px solid #000; margin-down: 10px;'>
<h2>Uspješna rezervacija automobila {{$vehicle->modelOfVehicle->makeOfVehicle->name}} {{$vehicle->modelOfVehicle->name}} za datume od {{$from_date}} do {{$to_date}}</h2>
</div>
<div style='border: 3px solid #000;'>
<h3>Vaš račun je: {{$vehicle_price * $days }} Kn za {{$days}} dana</h3>
</div>

<h4></h4>
</body>
</html>
