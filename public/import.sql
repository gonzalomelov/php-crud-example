drop table if exists usuarios;
drop table if exists generos;
drop table if exists titulos;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `generos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `genero` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `titulos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `idioma` varchar(32) NOT NULL,
  `subtitulos` varchar(32) NOT NULL,
  `zona` varchar(32) NOT NULL,
  `genero_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

insert into usuarios (usuario, password) values ('facu', 'facu');
insert into usuarios (usuario, password) values ('otro', 'otro');
insert into generos (genero) values ('Ciencia');
insert into generos (genero) values ('Historia');
insert into generos (genero) values ('Salud');
insert into generos (genero) values ('Tecnologia');
insert into titulos (titulo, idioma, subtitulos, zona, genero_id) values ('Historias Vol 1', 'Ingles', 'No', 'PAL', 2);
insert into titulos (titulo, idioma, subtitulos, zona, genero_id) values ('Todo sobre la salud', 'Ingles', 'Ingles', 'NTSC', 3);
insert into titulos (titulo, idioma, subtitulos, zona, genero_id) values ('Technologies', 'Ingles', 'Espanol', 'NTSC', 4);
