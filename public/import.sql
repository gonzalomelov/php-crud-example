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
  `genero_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

insert into usuarios (usuario, password) values ('root', 'root');
insert into usuarios (usuario, password) values ('gonza', 'gonza');
insert into generos (genero) values ('genero1');
insert into generos (genero) values ('genero2');
insert into generos (genero) values ('genero3');
insert into titulos (titulo, idioma, subtitulos, genero_id) values ('titulo1', 'idioma1', 'subs1', 1);
insert into titulos (titulo, idioma, subtitulos, genero_id) values ('titulo2', 'idioma2', 'subs2', 2);
