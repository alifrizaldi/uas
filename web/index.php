<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"
    >
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      .kotak {
        border-radius: 10px;
      }
    </style>
    <style type="text/css">
      /* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon {
  color: #fff;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler-icon {
  color: #4f4f4f;
}

/* Color of the navbar AFTER scroll */
.navbar-scrolled {
  background-color: #fff;
}

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll.navbar-scrolled {
  padding-top: 5px;
  padding-bottom: 5px;
}
    </style>
    <!-- End Css -->

    <title>UTS WEB SCIENCE</title>
  </head>
  <body id="home">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm bg-dark shadow-sm fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="#home">
      <i class="bi bi-bag-heart d-inline-block align-text-top" style="width: 40px; height: 34px;"></i>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galery">Galery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Halaman
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://pmb.unismuh.ac.id/profil" target="_BLANK">Profile Unismuh</a></li>
            <li><a class="dropdown-item" href="halaman/halaman5.php">Contact</a></li>
            <li><a class="dropdown-item" href="halaman/halaman3.php">Company Profile</a></li>
            <li><a class="dropdown-item" href="halaman/halaman4.php">Galery</a></li>
            <li><a class="dropdown-item" href="halaman/halaman2.php">Team Kelompok</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- End Navbar -->


    <!-- header -->
    <section id="home" class="jumbotron text-center">
      <img src="img/1.svg" class="rounded-circle img-thumbnail" width="200">
      <h1 class="display-4">Aco Startup</h1>
      <p class="lead">Web Developer | IT Consultant | IT Support</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,101.3C672,85,768,139,864,144C960,149,1056,107,1152,106.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- End Header -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h1>Tentang Aco Startup</h1>
          </div>
        </div>
      </div>
       <div class="row justify-content-center fs-5 text-center">
        <div class="col-4">
          <p>Aco Startup adalah perusahaan yg bergerak dalam bidang IT</p>
          <a href=" halaman/halaman3.php" class="btn btn-outline-primary kotak">Lihat selengkapnya</a>
        </div>
      </div>
    </section>
    <!-- End About -->


    <!-- Galery -->
    <section id="galery">
      <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card kotak" style="width: 18rem;">
  <img src="img/server.svg" class="card-img-top" alt="..." style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Project Admin Server</p>
    <p class="card-text">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adm Server</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <img src="img/server.svg" width="40%">
        <p>Kami menyediakan jasa administrasi server</p>
        </center>
        <p class=""></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </p>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card kotak" style="width: 18rem;">
  <img src="img/game.svg" class="card-img-top" alt="..." style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Game Project</p>
    <!-- Modal Game -->
    <p class="card-text">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#game">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="game" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Game Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Flex -->
        <div class="d-flex bd-highlight">
  <div class="p-2 w-100 bd-highlight"><img src="img/game.svg" width="40%"></div>
  <div class="p-2 flex-shrink-1 bd-highlight">Kami sedang mengembangkan sebuah game indie</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </p>
  </div>
</div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card kotak">
  <img src="img/pro2.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Web Project</p>

  </div>
</div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card kotak">
  <img src="img/cloud.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Cloud project</p>
    <p class="card-text">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Detail
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cloud Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
      <img src="img/cloud.svg" width="40%">
      <p>Kami sedang membuat system cloud untuk cctv jalanan</p>
    </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div></p>
  </div>
</div>

          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
  <img src="img/sis.svg" class="card-img-top" alt="..." style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Sistem Informasi Sekolah Project</p>
    <p class="card-text">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sistem Informasi Sekolah Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <img src="img/sis.svg" width="40%">
        <p>Kami Menyediakan Sistem Informasi Sekolah Untuk Mempermudah Management Adminstrasi Sekolah</p>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </p>
  </div>
</div>
          </div>
        </div>
      </div>
      </
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L34.3,186.7C68.6,181,137,171,206,154.7C274.3,139,343,117,411,112C480,107,549,117,617,144C685.7,171,754,213,823,208C891.4,203,960,149,1029,149.3C1097.1,149,1166,203,1234,208C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Galery -->

    <!-- Halaman -->
    <section id="halaman">
      
    </section>
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="namalengkap" id="nama" aria-describedby="nama">
  </div>
 <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
  </div>
  <div class="mb-3">
  <label for="pesan" class="form-label">Pesan</label>
  <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
      </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,128C384,160,480,192,576,202.7C672,213,768,203,864,170.7C960,139,1056,85,1152,69.3C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created With <i class="bi bi-suit-heart-fill text-danger"></i> By <a class="text-white fw-bold" href="https://www.instagram.com/nuryadins_">Aco Startup</a></p>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>