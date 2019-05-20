<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'YouGo')</title>
</head>

<body>

    <ul>
        <a href="/dashboard"><li>Home</li></a>
        <a href="/vehicles"><li>Vehicles</li></a>
        <a href="/vehicles/create"><li>Add New Vehicle</li></a>
    </ul>

    <hr>

    @yield('content')


</body>
</html>