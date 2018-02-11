create database at212_menu default character set utf8 default collate utf8_general_ci;

use at212_menu;
set names utf8;

create table department(
  id int unsigned auto_increment primary key,
  name varchar(100),
  parent_id int unsigned
) engine = InnoDB default charset = utf8;

create table person(
  id int unsigned auto_increment primary key,
  name varchar(100),
  department_id int unsigned
) engine = InnoDB default charset = utf8;

insert into department values (1, 'Отдел разработки', 0),
  (2, 'Внутрениий отдел разработки', 1),
  (3, 'Ещё один внутрениий отдел разработки', 2),
  (4, 'Собеседование', 3),
  (5, 'Собеседование', 2),
  (6, 'Юридический отдел', 1),
  (7, 'Собеседование', 6),
  (8, 'Собеседование', 1);

insert into person values (1, 'Скобелев Антон', 1), (2, 'Тютрин Алексей', 1);