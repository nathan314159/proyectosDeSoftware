johndoe@mail.com
contra#_222z

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <title>Assign Roles</title>
    <style>
        .wrapper {
            display: flex;
            gap: 40px;
            padding: 20px;
            align-items: flex-start;
        }

        .asignar-rol {
            flex: 0 0 30%;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .asignar-roles-table {
            flex: 1;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .table-scroll {
            height: 200px;
            /* Fixed height */
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        select,
        label,
        button {
            display: block;
            margin: 10px 0;
        }

        .container {
            width: 100%;
            margin-bottom: 15px;
        }

        .container select,
        .container label {
            width: 100%;
        }

        button {
            padding: 6px 12px;
            cursor: pointer;
        }

        td button {
            margin-right: 4px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="asignar-rol">
            <h2>Asignar rol</h2>
            <form id="formulario" action="<?= base_url('admin/assignRolls') ?>" method="POST">
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
        </div>

        <div class="asignar-roles-table">
            <h2>Roles Asignados</h2>
            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Rol</th>
                            <th colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (!empty($userRoles)): ?>
                            <?php $contador = 1; ?>
                            <?php foreach ($userRoles as $row): ?>
                                <tr>
                                    <td><?= esc($contador) ?></td>
                                    <td hidden><?= esc($row['id_users']) ?><input type="hidden" name="id_users_rol" value=<?= esc($row['id_users']) ?>></td>
                                    <td hidden><?= esc($row['id_rol']) ?><input type="hidden" name="id_rol" value=<?= esc($row['id_rol']) ?>></td>
                                    <td><?= esc($row['users_nombre']) . " " . esc($row['users_apellido']) ?></td>
                                    <td><?= esc($row['rol_nombre']) ?></td>
                                    <td>
                                        <form class="delete-form"
                                            action="<?= base_url('admin/deleteUserRol') ?>"
                                            method="GET">
                                            <input type="hidden" name="id_users_rol" value="<?= esc($row['id_users_rol']) ?>">
                                            <button type="submit">Eliminar</button>
                                        </form>

                                        <!--<form action="<?= base_url('admin/editUserRol/' . $row['id_users_rol']) ?>" method="POST" );">-->
                                        <button type="button" class="btnActualizar btn btn-danger btn-sm">Actualizar</button>

                                        <!--</form>-->
                                    </td>
                                </tr>
                                <?php $contador++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">No hay asignaciones de roles.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- modal para editar -->
    <div class="modal fade" id="modalParentesco" tabindex="-1" aria-labelledby="modalParentescoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalParentescoLabel">Detalles del Parentesco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Editar asignación de rol</h2>
                    <form id="form-edit">


                        <div class="container">
                            <label for="user">User</label>
                            <select name="user" id="user" disabled>
                                <?php foreach ($users as $user): ?>
                                    <option value="<?= esc($user['id_users']) ?>"

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

                                        <?= esc($role['rol_nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit">Actualizar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="assests/js/admin.js"></script>


</html>