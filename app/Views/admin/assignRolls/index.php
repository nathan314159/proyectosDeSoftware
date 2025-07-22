<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Roles</title>
</head>

<body>

    <form action="<?= base_url('admin/assignRolls') ?>" method="POST">

        <div class="container">
            <label for="user">User</label>
            <select name="user" id="user">
                <option value="">Ninguno</option>
                <?php foreach ($users as $user): ?>
                    <option value="<?= esc($user['id_users']) ?>">
                        <?= esc($user['users_nombre'] . ' ' . $user['users_apellido']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="container">
            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="">Ninguno</option>
                <?php foreach ($roles as $role): ?>
                    <option value="<?= esc($role['id_rol']) ?>">
                        <?= esc($role['rol_nombre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit">Assign</button>
    </form>

</body>

</html>