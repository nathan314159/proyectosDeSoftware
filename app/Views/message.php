<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rol Debug</title>
</head>
<body>
    <h1>Datos recibidos</h1>
    <p><strong>ID del rol:</strong> <?= esc($rol_nombre ?? 'No recibido') ?></p>
    <p><strong>Nombre del rol:</strong> <?= esc($rol_nombre ?? 'No recibido') ?></p>
    <p><strong>Estado del rol:</strong> <?= esc($rol_estado ?? 'No recibido') ?></p>

    <h2>Array completo</h2>
    <pre><?= print_r($data ?? [], true) ?></pre>
</body>
</html>
