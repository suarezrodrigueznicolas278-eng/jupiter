<?php require __DIR__ . '/partials/header.php'; ?>

<!-- SECCIÓN 2: HERO -->
<header id="inicio" class="hero">
  <div class="hero-escena">
    <h1 class="hero-titulo">EUROPA</h1>
    <img src="assets/img/botella.svg" class="botella" alt="Botella de Europa">
    <img src="assets/img/roca.svg" class="roca" alt="">
    <img src="assets/img/sello-new.svg" class="sello" alt="Nuevo, edición limitada">
  </div>
  <div class="hero-pie d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
    <p class="hero-texto mb-0">Europa es un vino de hielo dulce, perfecto para cerrar tus cenas. Como un postre en botella, se sirve frío, como la luna helada.</p>
    <a href="#tienda" class="btn btn-rust btn-lg">Pedir ahora</a>
    <span class="d-none d-md-block flex-grow-0 hero-relleno"></span>
  </div>
</header>

<!-- SECCIÓN 3: TIENDA (datos desde BD) -->
<section id="tienda" class="seccion">
  <div class="container">
    <h2 class="titulo-seccion" data-aos="fade-up">Nuestros vinos</h2>
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" data-aos="fade-up">
      <a href="index.php#tienda" class="chip <?= $tipoActual === '' ? 'activo' : '' ?>">Todos</a>
      <?php foreach ($tipos as $t): ?>
        <a href="index.php?tipo=<?= urlencode($t) ?>#tienda" class="chip <?= $tipoActual === $t ? 'activo' : '' ?>"><?= htmlspecialchars($t) ?></a>
      <?php endforeach; ?>
    </div>
    <div class="row g-4">
      <?php foreach ($productos as $i => $p): ?>
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 120 ?>">
          <article class="tarjeta h-100">
            <div class="tarjeta-img"><img src="<?= htmlspecialchars($p['imagen']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>" loading="lazy"></div>
            <div class="tarjeta-cuerpo">
              <span class="etiqueta"><?= htmlspecialchars($p['tipo']) ?></span>
              <h3><?= htmlspecialchars($p['nombre']) ?></h3>
              <p><?= htmlspecialchars($p['descripcion']) ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <strong class="precio">$<?= number_format($p['precio'], 0, ',', '.') ?></strong>
                <a class="btn btn-rust btn-sm" target="_blank"
                   href="https://wa.me/573001234567?text=<?= urlencode('Hola, quiero pedir ' . $p['nombre']) ?>">Pedir</a>
              </div>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
      <?php if (!$productos): ?><p class="text-center">No hay vinos de este tipo.</p><?php endif; ?>
    </div>
  </div>
</section>

<!-- SECCIÓN 4: NUESTRA HISTORIA -->
<section id="historia" class="seccion seccion-alt">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-12 col-lg-6" data-aos="fade-right">
        <h2 class="titulo-seccion text-lg-start">Nuestra historia</h2>
        <p>Jupiter nace de una idea simple: convertir la cosecha helada en una experiencia dulce y brillante. Cada botella de Europa se elabora con uvas recogidas en las noches más frías del año.</p>
        <p>Pequeños lotes, procesos artesanales y un diseño que se inspira en las lunas de Júpiter.</p>
        <div class="row text-center mt-4">
          <div class="col-4"><div class="cifra" data-contar="12">0</div><small>Años</small></div>
          <div class="col-4"><div class="cifra" data-contar="6">0</div><small>Vinos</small></div>
          <div class="col-4"><div class="cifra" data-contar="2500">0</div><small>Clientes</small></div>
        </div>
      </div>
      <div class="col-12 col-lg-6" data-aos="fade-left">
        <div class="row g-3">
          <!-- Imágenes con ruta ABSOLUTA (URL completa) -->
          <div class="col-6"><img src="https://picsum.photos/seed/jupiter-vina/500/650" class="img-fluid historia-img" alt="Viñedo"></div>
          <div class="col-6 pt-4"><img src="https://picsum.photos/seed/jupiter-copa/500/650" class="img-fluid historia-img" alt="Copa de vino"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN 5: OPINIONES - CARRUSEL (Swiper, datos desde BD) -->
<section id="opiniones" class="seccion">
  <div class="container">
    <h2 class="titulo-seccion" data-aos="fade-up">Lo que dicen de Europa</h2>
    <div class="swiper mySwiper" data-aos="fade-up">
      <div class="swiper-wrapper">
        <?php foreach ($testimonios as $t): ?>
          <div class="swiper-slide">
            <div class="opinion">
              <div class="estrellas"><?= str_repeat('★', (int)$t['calificacion']) . str_repeat('☆', 5 - (int)$t['calificacion']) ?></div>
              <p>“<?= htmlspecialchars($t['comentario']) ?>”</p>
              <strong>— <?= htmlspecialchars($t['autor']) ?></strong>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- SECCIÓN 6: BLOG (datos desde BD) -->
<section id="blog" class="seccion seccion-alt">
  <div class="container">
    <h2 class="titulo-seccion" data-aos="fade-up">Blog</h2>
    <div class="row g-4">
      <?php foreach ($articulos as $i => $a): ?>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="<?= $i * 120 ?>">
          <article class="tarjeta h-100">
            <div class="tarjeta-img"><img src="<?= htmlspecialchars($a['imagen']) ?>" alt="<?= htmlspecialchars($a['titulo']) ?>" loading="lazy"></div>
            <div class="tarjeta-cuerpo">
              <small class="text-secondary"><?= date('d/m/Y', strtotime($a['fecha'])) ?></small>
              <h3><?= htmlspecialchars($a['titulo']) ?></h3>
              <p><?= htmlspecialchars($a['resumen']) ?></p>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SECCIÓN 7: ENCUÉNTRANOS / CONTACTO (POST -> BD) -->
<section id="contacto" class="seccion">
  <div class="container">
    <h2 class="titulo-seccion" data-aos="fade-up">Encuéntranos</h2>
    <div class="row g-5 justify-content-center">
      <div class="col-12 col-lg-5" data-aos="fade-right">
        <p><i class="bi bi-geo-alt"></i> Calle 00 #00-00, tu ciudad</p>
        <p><i class="bi bi-clock"></i> Lunes a sábado, 10:00 a 20:00</p>
        <p><i class="bi bi-envelope"></i> hola@jupiter.com</p>
        <p class="mb-0">Escríbenos para pedidos, eventos o catas privadas.</p>
      </div>
      <div class="col-12 col-lg-6" data-aos="fade-left">
        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-danger">Revisa los datos e inténtalo de nuevo.</div>
        <?php endif; ?>
        <form action="index.php?accion=guardar" method="POST" class="formulario">
          <div class="mb-3"><label class="form-label">Nombre</label><input type="text" name="nombre" class="form-control" required></div>
          <div class="mb-3"><label class="form-label">Correo</label><input type="email" name="email" class="form-control" required></div>
          <div class="mb-3"><label class="form-label">Mensaje</label><textarea name="mensaje" rows="4" class="form-control" required></textarea></div>
          <button class="btn btn-rust w-100" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN 8: FOOTER -->
<footer class="pie text-center">
  <div class="logo mb-2">JUPITER</div>
  <div class="my-3 fs-4">
    <a href="#" class="social"><i class="bi bi-instagram"></i></a>
    <a href="#" class="social"><i class="bi bi-facebook"></i></a>
    <a href="#" class="social"><i class="bi bi-tiktok"></i></a>
  </div>
  <small>&copy; <?= date('Y') ?> Jupiter. Proyecto académico. · <a href="index.php?accion=admin" class="pie-enlace">Admin</a></small>
</footer>

<?php require __DIR__ . '/partials/footer.php'; ?>
