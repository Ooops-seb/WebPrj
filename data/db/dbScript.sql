/*==============================================================*/
/* DBMS name: MiSQL 5.0 */
/* Created on: 10/01/2019 21:03:26 */
/*==============================================================*/

CREATE DATABASE peliculas;

use peliculas;

DROP TABLE IF EXISTS actor;
DROP TABLE IF EXISTS actor_pelicula;
DROP TABLE IF EXISTS alquiler;
DROP TABLE IF EXISTS director;
DROP TABLE IF EXISTS formato;
DROP TABLE IF EXISTS genero;
DROP TABLE IF EXISTS pelicula;
DROP TABLE IF EXISTS sexo;
DROP TABLE IF EXISTS socio;

/*==============================================================*/
/* Table: ACTOR */
/*==============================================================*/
CREATE TABLE actor
(
 ACT_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 SEX_ID INT COMMENT 'Sexo',
 ACT_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PRIMARY KEY (ACT_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE actor COMMENT 'Apellidos y nombre de los actores';
/*==============================================================*/
/* Table: ACTOR_PELICULA */
/*==============================================================*/
CREATE TABLE actor_pelicula
(
 APL_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 ACT_ID INT COMMENT 'Actor',
 PEL_ID INT COMMENT 'Película',
 APL_PAPEL VARCHAR(60) NOT NULL COMMENT 'Papel',
 PRIMARY KEY (APL_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE actor_pelicula COMMENT 'Registro de Papel en la Película Actor Principal';
/*==============================================================*/
/* Table: ALQUILER */
/*==============================================================*/
CREATE TABLE alquiler
(
 ALQ_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 SOC_ID INT COMMENT 'Socio',
 PEL_ID INT COMMENT 'Película',
 ALQ_FECHA_DESDE DATE NOT NULL COMMENT 'Fecha Inicial',
 ALQ_FECHA_HASTA DATE NOT NULL COMMENT 'Fecha Final',
 ALQ_VALOR NUMERIC(10,2) NOT NULL COMMENT 'Valor',
 ALQ_FECHA_ENTREGA DATE COMMENT 'Fecha Entrega',
 PRIMARY KEY (ALQ_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE alquiler COMMENT 'Datos de Alquiler de la Película al Socio';
/*==============================================================*/
/* Table: DIRECTOR */
/*==============================================================*/
CREATE TABLE director
(
 DIR_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 DIR_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PRIMARY KEY (DIR_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE director COMMENT 'Nombre del director de la película';
/*==============================================================*/
/* Table: FORMATO */
/*==============================================================*/
CREATE TABLE formato
(
 FOR_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 FOR_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PRIMARY KEY (FOR_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE formato COMMENT 'CD DVD VHS';
/*==============================================================*/
/* Table: GENERO */
/*==============================================================*/
CREATE TABLE genero
(
 GEN_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 GEN_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PRIMARY KEY (GEN_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE genero COMMENT 'Romántica Cómico Ciencia Ficción Deportes';
/*==============================================================*/
/* Table: PELICULA */
/*==============================================================*/
CREATE TABLE pelicula
(
 PEL_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 GEN_ID INT COMMENT 'Género',
 DIR_ID INT COMMENT 'Director',
 FOR_ID INT COMMENT 'Formato',
 PEL_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PEL_COSTO NUMERIC(10,2) NOT NULL COMMENT 'Costo',
 PEL_FECHA_ESTRENO DATE COMMENT 'Fecha Estreno',
 PRIMARY KEY (PEL_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE pelicula COMMENT 'Datos de Identificación de la Película';
/*==============================================================*/
/* Table: SEXO */
/*==============================================================*/
CREATE TABLE sexo
(
 SEX_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 SEX_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 PRIMARY KEY (SEX_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE sexo COMMENT 'Masculino Femenino';
/*==============================================================*/
/* Table: SOCIO */
/*==============================================================*/
CREATE TABLE socio
(
 SOC_ID INT NOT NULL AUTO_INCREMENT COMMENT 'Id',
 SOC_CEDULA CHAR(10) NOT NULL COMMENT 'Cédula',
 SOC_NOMBRE VARCHAR(60) NOT NULL COMMENT 'Nombre',
 SOC_DIRECCION VARCHAR(60) NOT NULL COMMENT 'Dirección',
 SOC_TELEFONO CHAR(10) NOT NULL COMMENT 'Teléfono',
 SOC_CORREO VARCHAR(60) NOT NULL COMMENT 'Correo',
 PRIMARY KEY (SOC_ID)
)ENGINE=InnoDB AUTO_INCREMENT=1;
ALTER TABLE actor ADD CONSTRAINT Fn_SEXO_ACTOR FOREIGN KEY (SEX_ID) REFERENCES sexo (SEX_ID);
ALTER TABLE actor_pelicula ADD CONSTRAINT Fn_ACTOR_ACTORPELICULA FOREIGN KEY (ACT_ID) REFERENCES actor (ACT_ID);
ALTER TABLE actor_pelicula ADD CONSTRAINT Fn_PELICULA_ACTORPELICULA FOREIGN KEY (PEL_ID) REFERENCES pelicula (PEL_ID);
ALTER TABLE alquiler ADD CONSTRAINT Fn_PELICULA_ALQUILER FOREIGN KEY (PEL_ID) REFERENCES pelicula (PEL_ID);
ALTER TABLE alquiler ADD CONSTRAINT Fn_SOCIO_ALQUILER FOREIGN KEY (SOC_ID) REFERENCES socio (SOC_ID);
ALTER TABLE pelicula ADD CONSTRAINT Fn_DIRECTOR_PELICULA FOREIGN KEY (DIR_ID) REFERENCES director (DIR_ID);
ALTER TABLE pelicula ADD CONSTRAINT Fn_FORMATO_PELICULA FOREIGN KEY (FOR_ID) REFERENCES formato (FOR_ID);
ALTER TABLE pelicula ADD CONSTRAINT Fn_GENERO_PELICULA FOREIGN KEY (GEN_ID) REFERENCES genero (GEN_ID);
