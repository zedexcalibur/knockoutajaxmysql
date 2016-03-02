# knockoutajaxmysql
Updatable staff list made with Knockout, AJAX and MySQL.

The MySQL database is set up with:

CREATE DATABASE if not exists staff;
use staff;
CREATE TABLE people
(
id smallint unsigned NOT NULL auto_increment,
firstname varchar(255),
surname varchar(255),
PRIMARY KEY (id)
);