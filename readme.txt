Creating users in phpMyAdmin
**********************
create table users  (
	ID int(11) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) not null,
    password varchar(100),
    role varchar(50),
    name varchar(50) not null,
    date_added TIMESTAMP not null default CURRENT_TIMESTAMP  
);

*********************************************************

Creating Products in phpMyAdmin
**********************
create table Products (
	ID int(11) not null PRIMARY KEY AUTO_INCREMENT,
    date_added TIMESTAMP not null default CURRENT_TIMESTAMP,
    name varchar(125) not null,
    stock int(100) not null,
    name varchar(125) not null,
    price double not null  
);

insert into (column_names) values ('in inverted commas');

select column_name from table_name where other_column_name = 'value';


Counting The Number Of Users
*******************************************
SELECT COUNT(*) FROM users;