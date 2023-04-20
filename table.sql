create table users(
				id int auto_increment,
				name varchar(60),
				address varchar(120),
				phone numeric,
				mail varchar(120),
				comment varchar(200),
				primary key(id));


create table dogs(
				id int auto_increment,
				name varchar(60),
				address varchar(120),
				age numeric,
				mail varchar(120),
				comment varchar(200),
				breed varchar(200),
				primary key(id));
				