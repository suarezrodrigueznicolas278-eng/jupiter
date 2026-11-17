<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($titulo ?? 'Jupiter') ?></title>
  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Black&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <!-- Bootstrap (framework CSS) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Librerías adicionales: Bootstrap Icons, Swiper (carrusel) y AOS (animaciones al scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="marco">
<nav class="navbar navbar-expand-lg sticky-top barra" data-bs-theme="dark">
  <div class="container-fluid px-3 px-lg-5">
    <a class="navbar-brand logo d-flex align-items-center gap-2" href="index.php">
      <!-- Imagen con ruta RELATIVA -->
      <img src="assets/img/logo.svg" alt="Jupiter" height="30"> JUPITER
    </a>
    <button class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Menú">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item"><a class="nav-link" href="index.php#tienda">Tienda</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#historia">Nuestra historia</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#contacto">Encuéntranos</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#blog">Blog</a></li>
      </ul>
      <div class="text-center"><a href="index.php#tienda" class="btn btn-rust"><i class="bi bi-bag"></i> Carrito</a></div>
    </div>
  </div>
</nav>
