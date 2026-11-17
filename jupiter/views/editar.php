<?php require __DIR__ . '/partials/header.php'; ?>
<section class="seccion" style="min-height:70vh">
  <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-8 col-lg-6">
    <h2 class="titulo-seccion">Editar mensaje #<?= $c['id'] ?></h2>
    <form action="index.php?accion=actualizar" method="POST" class="formulario">
      <input type="hidden" name="id" value="<?= $c['id'] ?>">
      <div class="mb-3"><label class="form-label">Nombre</label><input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($c['nombre']) ?>" required></div>
      <div class="mb-3"><label class="form-label">Correo</label><input type="email" name="email" class="form-control" value="<?= htmlspecialchars($c['email']) ?>" required></div>
      <div class="mb-3"><label class="form-label">Mensaje</label><textarea name="mensaje" rows="4" class="form-control" required><?= htmlspecialchars($c['mensaje']) ?></textarea></div>
      <button class="btn btn-rust">Guardar cambios</button>
      <a href="index.php?accion=admin" class="btn btn-link text-light">Cancelar</a>
    </form>
  </div></div></div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
