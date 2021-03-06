/***************************************************************************
   Sql script 
   -------------------
   This file has been generated by HyperDev in $date.
   HyperDev is a GNU code generator developed by Ruben Dorado. 
 ***************************************************************************/

/***************************************************************************
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU Lesser General Public License           *
 *   version 2.1 as published by the Free Software Foundation;             *
 *                                                                         *
 ***************************************************************************/

CREATE TABLE Facultad(
 idFacultad INT NOT NULL AUTO_INCREMENT,
 nombreFac VARCHAR(255),
 PRIMARY KEY ( idFacultad ) 
);

CREATE TABLE Tipo_Actividad(
 idTipo INT NOT NULL AUTO_INCREMENT,
 descripcion VARCHAR(255),
 PRIMARY KEY ( idTipo ) 
);

CREATE TABLE Asignatura(
 idAsignatura INT NOT NULL AUTO_INCREMENT,
 nombre VARCHAR(255),
 PRIMARY KEY ( idAsignatura ) 
);

CREATE TABLE Actividad(
 idActividad INT NOT NULL AUTO_INCREMENT,
 idTipo INT,
 nombre VARCHAR(255),
 porcentaje INT,
 PRIMARY KEY ( idActividad ) 
);

CREATE TABLE Profesor(
 idProfesor INT NOT NULL AUTO_INCREMENT,
 nombre VARCHAR(255),
 idFacultad INT,
 PRIMARY KEY ( idProfesor ) 
);

CREATE TABLE Estudiante(
 idEstudiante INT NOT NULL AUTO_INCREMENT,
 nombre VARCHAR(255),
 idFacultad INT,
 PRIMARY KEY ( idEstudiante ) 
);

CREATE TABLE Grupo(
 idGrupo INT NOT NULL AUTO_INCREMENT,
 horario VARCHAR(255),
 salon VARCHAR(255),
 idAsignatura INT,
 idProfesor INT,
 idFacultad INT,
 PRIMARY KEY ( idGrupo ) 
);

CREATE TABLE Grupo_Estudiante(
 idGrupoEstudiante INT NOT NULL AUTO_INCREMENT,
 idGrupo INT,
 idEstudiante INT,
 PRIMARY KEY ( idGrupoEstudiante ) 
);

CREATE TABLE Asistencia(
 idAsistencia INT NOT NULL AUTO_INCREMENT,
 fecha DATE,
 idGrupoEstudiante INT,
 PRIMARY KEY ( idAsistencia ) 
);

CREATE TABLE Calificacion(
 idCalificacion INT NOT NULL AUTO_INCREMENT,
 idGrupoEstudiante INT,
 idActividad INT,
 nota INT,
 PRIMARY KEY ( idCalificacion ) 
);

