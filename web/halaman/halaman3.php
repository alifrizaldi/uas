<?php
include 'css.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://wallpaperaccess.com/full/104815.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Aco Startup</h1>
    <p>IT Solution</p>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="card">
  <div class="card-body">
    <p class="card-text">
      <b>Aco Startup</b>
    </p>
    <p class="card-text">Aco Startup merupakan perusahaan penyedia solusi teknologi informasi yang berkantor pusat di Yogyakarta</p>
    <p class="card-text">Saat ini Aco Startup mengembangkan produk dan layanan teknologi informasi, masterplan teknologi, IoT dan pengembangan platform smart city.</p>
  </div>
</div>
</div>

</body>
</html>