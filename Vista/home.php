<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page_tage']; ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>Assets/images/upload/logoClinica.png" alt="Logo" style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>servicios">Servicios</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>Assets/images/upload/clinica1.jpg" class="d-block w-50" alt="..." style="margin-left: 25%";>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: black;"><span style="background-color: white; padding: 5px; border-radius: 10px;">Atención a clientes</span></h5>
        <!-- <p style="color: black;">Mejora del servicio de atención a clientes</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>Assets/images/upload/clinica2.jpg" class="d-block w-50" alt="..." style="margin-left: 25%">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="color: black;"><span style="background-color: white; padding: 5px; border-radius: 10px;">Nueva administración</span></h5>
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>Assets/images/upload/clinica3.jpg" class="d-block w-50" alt="..." style="margin-left: 25%">
      <div class="carousel-caption d-none d-md-block">
      <h5 style="color: black;"><span style="background-color: white; padding: 5px; border-radius: 10px;">Equipo médico actualizado</span></h5>
        <!-- <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
<div class="card-group">
  <div class="card">
    <img src="<?php echo base_url();?>Assets/images/upload/card1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicio Médico</h5>
      <p class="card-text">Registrate con nosotros y obten un servicio médico implecable</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo base_url();?>Assets/images/upload/card2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Instalaciones</h5>
      <p class="card-text">Las mejores instalaciones con los médicos más preparados de todo México</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo base_url();?>Assets/images/upload/card3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Optometrista</h5>
      <p class="card-text">Accede a promociones de lentes directamente con nuestra clínica, hechos por nuestros mejores optometristas</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>