<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios - Curso Styde.net</title>
  </head>
  <body>
    <h1><?= e($title) ?></h1>

    <ul>

    <?php foreach ($users as $user): ?>
        <li><?php echo e($user) ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
