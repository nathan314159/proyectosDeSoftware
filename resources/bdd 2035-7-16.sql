CREATE TABLE `tbl_users` (
  `id_users` integer PRIMARY KEY,
  `users_nombre` varchar(255),
  `users_apellido` varchar(255),
  `users_cedula` varchar(255),
  `users_estado` bool,
  `users_created_at` timestamp
);

CREATE TABLE `tbl_rol` (
  `id_rol` integer PRIMARY KEY,
  `rol_nombre` varchar(255),
  `rol_estado` bool,
  `rol_created_at` timestamp
);

CREATE TABLE `tbl_rol_access` (
  `id_principal_rol_access` integer PRIMARY KEY,
  `id_rol` integer NOT NULL,
  `id_funcionalidad` integer NOT NULL
);

CREATE TABLE `tbl_funcionalidad` (
  `id_funcionalidad` integer PRIMARY KEY,
  `funcionalidad_nombre_funcion` varchar(255),
  `funcionalidad_url` varchar(255),
  `funcionalidad_estado` bool,
  `funcionalidad_created_at` timestamp
);

CREATE TABLE `tbl_user_rol` (
  `id_users_rol` integer PRIMARY KEY,
  `id_users` integer NOT NULL,
  `id_rol` integer NOT NULL,
  `user_rol_estado` bool,
  `user_rol_created_at` timestamp
);

CREATE TABLE `tbl_catalogo` (
  `id_catalogo` integer PRIMARY KEY,
  `cat_codigo` varchar(255),
  `cat_nombre` varchar(255),
  `ca_estado` bool
);

CREATE TABLE `tbl_item_catalogo` (
  `id_item` integer PRIMARY KEY,
  `itc_codigo` varchar(255),
  `itc_nombre` varchar(255),
  `itc_descripcion` varchar(255),
  `itc_estado` bool,
  `id_catalogo` integer NOT NULL
);

ALTER TABLE `tbl_rol_access` ADD FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`);

ALTER TABLE `tbl_rol_access` ADD FOREIGN KEY (`id_funcionalidad`) REFERENCES `tbl_funcionalidad` (`id_funcionalidad`);

ALTER TABLE `tbl_user_rol` ADD FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`);

ALTER TABLE `tbl_user_rol` ADD FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`);

ALTER TABLE `tbl_item_catalogo` ADD FOREIGN KEY (`id_catalogo`) REFERENCES `tbl_catalogo` (`id_catalogo`);
