create database if not exists banco;
use banco;

create table if not exists type_user(
	id_type int not null auto_increment,
    description_type varchar(255) not null,
    status_type int not null,
    primary key(id_type)
);

create table if not exists user (
	id_user int not null auto_increment,
    login_user varchar(100) not null,
    password_user varchar(100) not null,
    id_type int not null,
    status_user int not null,
    foreign key(id_type) references type_user(id_type),
    primary key(id_user)
);

select * from user;

insert into type_user(description_type, status_type) values ('Administrador', 1);
insert into user(login_user, password_user, id_type, status_user) values ('admin', 'admin', 1, 1);