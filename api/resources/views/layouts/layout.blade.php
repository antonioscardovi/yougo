<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'YouGo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
</head>

<body>


    <ul class="navbar has-background-grey-light">
        <a href="/" class="navbar-item"><li>Home</li></a>
        <a href="/users" class="navbar-item"><li>Users</li></a>
        <a href="/customers" class="navbar-item"><li>Customers</li></a>
        <a href="/vehicles" class="navbar-item"><li>Vehicles</li></a>
        <a href="/vehicles/create" class="navbar-item"><li>Add New Vehicle</li></a>
    </ul>


  

    <div class="container">
        @yield('content')
    </div>


</body>
</html>
