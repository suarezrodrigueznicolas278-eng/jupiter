<?php require __DIR__ . '/partials/header.php'; ?>
<section class="seccion" style="min-height:70vh">
  <div class="container">
    <h2 class="titulo-seccion text-start">Mensajes recibidos</h2>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle">
        <thead><tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Fecha</th><th>Acciones</th></tr></thead>
        <tbody>
        <?php foreach ($contactos as $c): ?>
          <tr>
            <td><?= $c['id'] ?></td>
            <td><?= htmlspecialchars($c['nombre']) ?></td>
            <td><?= htmlspecialchars($c['email']) ?></td>
            <td><?= htmlspecialchars($c['mensaje']) ?></td>
            <td><?= $c['fecha'] ?></td>
            <td class="text-nowrap">
              <a href="index.php?accion=editar&id=<?= $c['id'] ?>" class="btn btn-sm btn-outline-light">Editar</a>
              <a href="index.php?accion=eliminar&id=<?= $c['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Eliminar este mensaje?')">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php if (!$contactos): ?><tr><td colspan="6" class="text-center">Sin mensajes.</td></tr><?php endif; ?>
        </tbody>
      </table>
    </div>
    <a href="index.php" class="btn btn-rust">Volver</a>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
