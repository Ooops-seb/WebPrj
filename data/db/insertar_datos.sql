/* Insertar datos en la tabla ACTOR */
INSERT INTO actor (SEX_ID, ACT_NOMBRE) VALUES
(1, 'Tom Hanks'),
(2, 'Sofia Carson'),
(1, 'Robert Downey Jr.'),
(1, 'Keanu Reeves')
;
/* Insertar datos en la tabla GENERO */
INSERT INTO genero (GEN_NOMBRE) VALUES
('Drama'),
('Diversion'),
('Terror'),
('Baile');
/* Insertar datos en la tabla PELICULA */
INSERT INTO pelicula (GEN_ID, DIR_ID, FOR_ID, PEL_NOMBRE, PEL_COSTO, PEL_FECHA_ESTRENO) VALUES
(1, 1, 1, 'El padrino', 12.99, '2023-01-01'),
(2, 2, 2, 'El mago de Oz', 9.99, '2023-02-01'),
(3, 3, 3, 'Ciudadano Kane', 14.50, '2023-03-01');

/* Insertar datos en la tabla ACTOR_PELICULA */
INSERT INTO actor_pelicula (ACT_ID, PEL_ID, APL_PAPEL) VALUES
(5, 1, 'Protagonista'),
(12, 1, 'Secundario'),
(5, 2, 'Principal');

/* Insertar datos en la tabla ALQUILER */
INSERT INTO alquiler (SOC_ID, PEL_ID, ALQ_FECHA_DESDE, ALQ_FECHA_HASTA, ALQ_VALOR, ALQ_FECHA_ENTREGA) VALUES
(1, 1, '2023-01-01', '2023-01-10', 10.50, '2023-01-11'),
(2, 2, '2023-02-01', '2023-02-15', 15.75, '2023-02-16'),
(3, 3, '2023-03-01', '2023-03-05', 8.20, '2023-03-06');
/* Insertar datos en la tabla SEXO */
INSERT INTO sexo (SEX_NOMBRE) VALUES
('Masculino'),
('Femenino');

/* Insertar datos en la tabla DIRECTOR */
INSERT INTO director (DIR_NOMBRE) VALUES
('Martin Scorsese'),
('Agnès Varda'),
('Stanley Kubrick');

/* Insertar datos en la tabla FORMATO */
INSERT INTO formato (FOR_NOMBRE) VALUES
('CD'),
('DVD'),
('VHS');

/* Insertar datos en la tabla SOCIO */
INSERT INTO socio (SOC_CEDULA, SOC_NOMBRE, SOC_DIRECCION, SOC_TELEFONO, SOC_CORREO) VALUES
('1234567890', 'Mayuri Plasencia', 'Latacunga', '1234567890', 'socio1@example.com'),
('9876543210', 'Belen Taco', 'Quito', '9876543210', 'socio2@example.com'),
('5678901234', 'Erik Villareal', 'Lasso', '5678901234', 'socio3@example.com');
