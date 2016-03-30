<!-- display results -->
<!DOCTYPE html>
<!-- Results page of associative array search example. -->
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/wp.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>

<body>
  @section('navbar')
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Social Network</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
         <li><a href="/lab4task4/public/">Posts</a></li>
          <li><a href="/lab4task4/public/friends">Friends</a></li>
          <li><a href="/lab4task4/public/login">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
 @show
@section("profile")
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD6wQP_cYi4uPgbvuHlXboMeUUj2ULovNZRTjBpdYzpAXiPeDD" width="200px" height="200px">
<br>
<br>
<h2>Abdul Noll</h2>
@show
  @section('content')
  
  @show
</body>
</html>