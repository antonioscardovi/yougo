<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'YouGo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://gitcdn.xyz/repo/lucperkins/bulma-dashboard/master/dist/bulma-dashboard.min.css">
</head>

<body>
    <div class="wrapper">
<div class="dashboard"> 

  <div class="dashboard-panel is-small has-background-grey-lighter">

        <div class="has-text-centered">
             <a href="'/'">  {!! Html::image('img/yugo-tamno.png', 'YouGo logo') !!} </a> 
      
      <br><br>
<aside class="menu">
        <a href="/" class="navbar-item ">Home</a>
        <a href="/users" class="navbar-item ">Users</a>
        <a href="/customers" class="navbar-item">Customers</a>
        <a href="/vehicles" class="navbar-item">Vehicles</a>
        <a href="/vehicles/create" class="navbar-item">Add New Vehicle</a>
    </aside>
    </div>
    
    <nav class="navbar is-fixed-top has-background-grey" style="z-index: -1;">
        <div class="navbar-menu">
            <div class="navbar-end">
          <span class="navbar-item has-text-primary" >
            <a href="#">Admin</a>
        </span>
    </div>
        </div>
      </nav>
   
  <div class="section">
        @yield('content')
    </div>



  </div>


  

</body>
</html>
