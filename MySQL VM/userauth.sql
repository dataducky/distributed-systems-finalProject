create database userauth;

use userauth;

create table users
(
  username varchar(16) not null primary key,
  password varchar(56) not null,
  hasadmin bool not null
);

CREATE USER 'loginHandler'@'localhost' identified by 'S3cur3Pa22';
GRANT select, insert, update, delete on userauth.* to 'loginHandler'@'localhost';
