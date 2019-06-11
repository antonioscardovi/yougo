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
    <h2>Dobrodošli u YouGo d.o.o.</h2>
    <h3>Registrirajte se putem linka</h3>
    <h4>Invite code: <a href="{{ $invitation->getLink() }}">{{ $invitation->getLink() }}</a></h4>
</body>
</html>
