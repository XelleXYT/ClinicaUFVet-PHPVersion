DROP DATABASE IF EXISTS clinicaufvet;
CREATE DATABASE IF NOT EXISTS clinicaufvet;
USE clinicaufvet;

CREATE TABLE IF NOT EXISTS cliente 
(
	dni varchar(9) NOT NULL PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    apellido varchar(40) NOT NULL,
    direccion varchar(128) NOT NULL,
	cp int(5) NOT NULL,
    telefono int(9) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
CREATE TABLE IF NOT EXISTS veterinario
(
	dni varchar(9) NOT NULL PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    apellido varchar(40) NOT NULL,
    pass varchar(20) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS mascota
(
	chip int(15) NOT NULL PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    sexo int(1) NOT NULL,
    especie varchar(32) NOT NULL,
    raza varchar(64) NOT NULL,
    fecha_nacimiento date DEFAULT NULL,
    cliente varchar(9) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS cita
(
	id mediumint NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha_cita date NOT NULL,
    descripcion text NOT NULL,
    mascota int(15) NOT NULL,
    veterinario varchar(9) NOT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cliente ( dni, nombre, apellido, direccion, cp, telefono) VALUES
('00000001C','Antonio','Perez','Paseo de Las Humanidades, Modulo 3, Aula Android',00000,666666666),
('00000002C','Laura','Sanz','Paseo de Las Humanidades, Modulo 3, Aula 3.4',00001,666666667),
('00000003C','Jorge','Santiago','Paseo de Las Humanidades, Modulo 1, Aula 1.2',00002,666666668),
('00000004C','Luis','Ocaña','Paseo de Las Humanidades, Modulo 5, Aula 5.1',00003,666666669),
('00000005C','Carmen','Ruiz','Paseo de Las Humanidades, Modulo 2, Aula 2.3',00004,666666671),
('00000006C','Jose','Sierra','Paseo de Las Humanidades, Modulo 3, Aula 3.7',00005,666666672),
('00000007C','Isabel','Jimenez','Paseo de Las Humanidades, Modulo 6, Aula 6.7',00006,666666673),
('00000008C','Alberto','Saenz','Paseo de Las Humanidades, Modulo 5, Aula 5.1',00007,666666674),
('00000009C','Javier','Fuentes','Paseo de Las Humanidades, Modulo 6, Aula 6.4',00008,666666675),
('00000010C','Pilar','Ramirez','Paseo de Las Humanidades, Modulo 2, Aula 2.1',00009,666666676)
;

INSERT INTO veterinario (dni, nombre, apellido, pass) VALUES
('00000001V','Maria','Lopez','lopezmaria'),
('00000002V','Nicolas','Carpio','carpionicolas')
;

INSERT INTO mascota (chip, nombre, sexo, especie, raza, fecha_nacimiento, cliente) VALUES
(000000000000001,'Misifu',0,'Gato','Montes','1998-04-08','00000001C'),
(000000000000002,'Oker',1,'Perro','Dalmata','1997-07-07','00000002C'),
(000000000000003,'Sofia',0,'Vaca','Limousin','2010-02-03','00000003C'),
(000000000000004,'Hermenegildo',1,'Conejo','Rex','2015-08-11','00000004C'),
(000000000000005,'Fulgencio',0,'Tortuga','Agua','2001-01-02','00000005C'),
(000000000000006,'Kaa',1,'Serpiente','Piton India','2004-04-03','00000006C'),
(000000000000007,'Lucas',1,'Perro','Golden Retriever','2009-11-11','00000007C'),
(000000000000008,'Mara',0,'Perro','Westie','2007-04-04','00000008C'),
(000000000000009,'Peko',1,'Gato','Persa','2015-03-03','00000009C'),
(000000000000010,'Luna',0,'Perro','Husky','2014-02-07','00000010C'),
(000000000000011,'Bonnie',0,'Gato','Azul Ruso','2017-01-02','00000002C'),
(000000000000012,'Lola',0,'Conejo','Belier','2016-02-08','00000005C')
;

INSERT INTO cita (fecha_cita,descripcion,mascota,veterinario) VALUES
('2018-01-01','Le dolia la tripa.',000000000000001,'00000002V'),
('2018-01-08','Sigue con dolores de tripa, le he recetado unas pildoras.',000000000000001,'00000002V'),
('2018-01-11','Tiene manchas raras en la piel.',000000000000002,'00000001V'),
('2018-01-20','Le he echado pomada en las manchas.',000000000000002,'00000001V'),
('2018-01-22','Tiene un problema en la garganta.',000000000000003,'00000001V'),
('2018-01-24','Tenia atastacada en la garganta una espina.',000000000000003,'00000001V'),
('2018-02-04','No quiere comer.',000000000000004,'00000001V'),
('2018-02-05','Le he tenido que poner una inyeccion.',000000000000004,'00000001V'),
('2018-02-12','Tiene problemas de cansancio.',000000000000005,'00000001V'),
('2018-02-13','Le he dado unas pastillas para que duerma.',000000000000005,'00000001V'),
('2018-02-20','Tiene problemas al mudar la piel.',000000000000006,'00000001V'),
('2018-02-21','Ha conseguido mudar la piel.',000000000000006,'00000001V'),
('2018-03-02','Se ha roto la pierna.',000000000000007,'00000001V'),
('2018-03-04','Revision de la pierna rota.',000000000000007,'00000001V'),
('2018-03-16','No tiene hambre.',000000000000008,'00000001V'),
('2018-03-19','Con la nueva marca de comida ya come.',000000000000008,'00000001V'),
('2018-03-27','Parece que su dueño no le da de comer.',000000000000009,'00000001V'),
('2018-03-28','He encontrado quemaduras en el pelaje del animal.',000000000000009,'00000001V'),
('2018-04-06','Tiene pulgas por no lavarse.',000000000000010,'00000001V'),
('2018-04-08','Le he dado un champu especial.',000000000000010,'00000001V'),
('2018-04-19','Necesita cortarse las uñas en dos sesiones.',000000000000011,'00000001V'),
('2018-04-21','Segunda sesion de cortes de uñas.',000000000000011,'00000001V'),
('2018-05-03','No tiene ganas de comer.',000000000000012,'00000001V'),
('2018-05-05','Le ha vuelto el apetito.',000000000000012,'00000001V')
;















