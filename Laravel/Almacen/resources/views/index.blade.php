<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('/img/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Almacén CAM
    </a>
  </div>
</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/a1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/a2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/a3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    <script src="{{ asset ('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>