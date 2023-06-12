create database if not exists practicaordenadores;

use practicaordenadores;

create table if not exists ordenadores(
	id int primary key auto_increment,
    marca varchar(20),
    modelo varchar(30),
    precio int,
    descripcion text
);

select * from ordenadores;

-- 8.- Importar los datos
LOAD DATA INFILE 'C:\\xampp\\htdocs\\proyecto\\CRUDphp\\ordenadores.csv'
INTO TABLE ordenadores
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

select * from ordenadores;
