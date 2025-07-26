
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Asignación de Rol</title>
    <style>
        /* ...existing styles... */
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="asignar-rol">
            <h2>Editar asignación de rol</h2>
            <form action="<?= base_url('admin/updateUserRol/' . $userRole['id_users_rol']) ?>" method="POST">
                <div class="container">
                    <label for="user">User</label>
                    <select name="user" id="user" disabled>
                        <?php foreach ($users as $user): ?>
                            <option value="<?= esc($user['id_users']) ?>"
                                <?= $user['id_users'] == $userRole['id_users'] ? 'selected' : '' ?>>
                                <?= esc($user['users_nombre'] . ' ' . $user['users_apellido']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="container">
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <?php foreach ($roles as $role): ?>
                            <option value="<?= esc($role['id_rol']) ?>"
                                <?= $role['id_rol'] == $userRole['id_rol'] ? 'selected' : '' ?>>
                                <?= esc($role['rol_nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>