CREATE TABLE  IF NOT EXISTS login (
         id int(11) NOT NULL auto_increment,
	 login varchar(20) NOT NULL UNIQUE,
	 password varchar(32) NOT NULL,
	 isadmin tinyint NOT NULL,
         PRIMARY KEY  (id))  ENGINE=InnoDB;
