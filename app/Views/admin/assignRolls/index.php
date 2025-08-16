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



        .container {
            width: 100%;
            margin-bottom: 15px;
        }

        .container select,
        .container label {
            width: 100%;
        }

        .acciones {
            display: flex;
            gap: 5px;
        }
    </style>
</head>

<body>
    <!-- asignar los Users a sus Roles -->

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
                        <?php foreach ($activeRol as $role): ?>
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
                                    <td><?= esc($row['users_nombre']) . " " . esc($row['users_apellido']) ?></td>
                                    <td><?= esc($row['rol_nombre']) ?></td>

                                    <!-- Hidden data for JS Add hidden inputs outside of <td> so you can access them via JS. -->
                                    <input type="hidden" class="id_users_rol" value="<?= esc($row['id_users_rol']) ?>">
                                    <input type="hidden" class="id_users" value="<?= esc($row['id_users']) ?>">
                                    <input type="hidden" class="id_rol" value="<?= esc($row['id_rol']) ?>">

                                    <td class="acciones">
                                        <form class="delete-form"
                                            action="<?= base_url('admin/deleteUserRol') ?>"
                                            method="GET">
                                            <input type="hidden" name="id_users_rol" value="<?= esc($row['id_users_rol']) ?>">
                                            <button type="submit" class="btn btn-danger px-4">Eliminar</button>
                                        </form>

                                        <!--<form action="<?= base_url('admin/editUserRol/' . $row['id_users_rol']) ?>" method="POST" );">-->
                                        <button type="button" class="btnActualizarUserRol btn btn-warning btn-sm">Actualizar</button>
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


    <!-- Crear Roles -->

    <div class="wrapper">
        <div class="asignar-rol">
            <h2>Crear Roles</h2>
            <form id="form-add-rol" action="<?= base_url('admin/addRol') ?>" method="post">
                <input type="text" name="rol_nombre" placeholder="Nombre del rol" required>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Agregar rol</button>
            </form>

        </div>
        <!-- table Roles -->
        <div class="asignar-roles-table">
            <h2>Roles Asignados</h2>
            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Rol</th>
                            <th>Estado</th>
                            <th colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (!empty($roles)): ?>
                            <?php $contador = 1; ?>
                            <?php foreach ($roles as $row): ?>
                                <tr data-id="<?= esc($row['id_rol']) ?>" data-nombre="<?= esc($row['rol_nombre']) ?>" data-estado="<?= esc($row['rol_estado']) ?>">
                                    <td><?= esc($contador) ?></td>
                                    <td><?= esc($row['rol_nombre']) ?></td>
                                    <td><?= ($row['rol_estado'] == 1) ? 'Activo' : 'Inactivo'; ?></td>

                                    <!-- Hidden data for JS Add hidden inputs outside of <td> so you can access them via JS. -->
                                    <input type="hidden" class="id_rol" value="<?= esc($row['id_rol']) ?>">
                                    <input type="hidden" class="rol_estado" value="<?= esc($row['rol_estado']) ?>">

                                    <td class="acciones">
                                        <form
                                            class="form-delete-rol"
                                            action="<?= base_url('admin/deleteRol') ?>"
                                            method="POST">
                                            <input type="hidden" name="id_rol" id="id_rol" value="<?= esc($row['id_rol']) ?>">
                                            <button type="submit" class="btn btn-danger px-4">Eliminar</button>
                                        </form>

                                        <button id="btnActualizarRol" type="button" class="btnActualizarRol btn btn-warning btn-sm">Actualizar</button>

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

    <!-- modal para editar modalAsignarRol -->
    <div class="modal fade" id="modalAsignarRol" tabindex="-1" aria-labelledby="modalAsignarRolLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalAsignarRolLabel">Detalles del Parentesco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h2>Editar asignación de rol</h2>
                    <form id="form-edit">
                        <input type="hidden" name="id_users_rol" id="edit_id_users_rol">

                        <div class="container">
                            <label for="edit_user">Usuario</label>
                            <select name="user" id="edit_user" disabled>
                                <?php foreach ($users as $user): ?>
                                    <option value="<?= esc($user['id_users']) ?>">
                                        <?= esc($user['users_nombre'] . ' ' . $user['users_apellido']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="container">
                            <label for="edit_role">Rol</label>
                            <select name="role" id="edit_role">
                                <?php foreach ($roles as $role): ?>
                                    <option value="<?= esc($role['id_rol']) ?>">
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


    <!-- modal para editar roles -->
    <div class="modal fade" id="modalEditarRol" tabindex="-1" aria-labelledby="modalEditarRolLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalEditarRolLabel">Detalles del Rol</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h2>Cambiar o modificar el rol</h2>
                    <form id="form-edit-rol" >
                        <input type="hidden" name="id_rol" id="edit_id_rol">

                        <div class="form-group">
                            <label for="edit_rol_nombre">Nombre del Rol</label>
                            <input type="text" class="form-control rol_nombre"
                                name="rol_nombre" id="edit_rol_nombre"
                                placeholder="Ingrese el nombre del rol..." required>
                        </div>

                        <div class="form-group">
                            <label for="edit_rol_estado">Estado</label>
                            <select name="rol_estado" id="edit_rol_estado" class="form-control rol_estado">
                                <option value="1">Activo</option>
                                <option value="0">Desactivado</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Actualizar</button>
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