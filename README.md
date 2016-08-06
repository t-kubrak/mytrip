# mytrip

**[Live version with examples](http://tkwebdev.xyz/)**

##Installation

1. Open the command line utility, `git clone https://github.com/t-kubrak/mytrip.git`
2. `cd mytrip`
3. `composer install` - installs all dependencies. See the following [link](https://getcomposer.org/doc/00-intro.md) if you don't have it
4.  Copy **.env.example** file in the root folder (mytrip) and rename it to **.env**
5.  `php artisan key:generate` generates application key
6.  Change database connection settings in **.env** file. 
7.  Create database, user and add some data. Optional: you can execute SQL script in *mytrip/databases/trips.sql* and skip the rest of installation.
	1. For MySQL we can use the following commands:
	  	- `CREATE DATABASE trips CHARACTER SET utf8 COLLATE utf8_unicode_ci;`
	  	- `CREATE USER 'dbAdmin'@'localhost' IDENTIFIED BY 'password';`
	  	- `GRANT ALL ON trips.* TO 'dbAdmin'@'localhost';`
	2. `php artisan:migrate` - this command creates database tables
	3. Add some data to airports and trips tables. For MySQL we can use the following commands:
	  	- `INSERT INTO airports VALUES ('JFK', 'John F.Kennedy International Airport','New York','USA', NOW(), NOW());`
	  	- `INSERT INTO airports VALUES ('YYZ', 'Toronto Pearson International Airport','Toronto','Canada', NOW(), NOW());`
	  	- `INSERT INTO airports VALUES ('CDG', 'Charles de Gaulle Airport','Paris','France', NOW(), NOW());`
	  	- `INSERT INTO trips VALUES (1, 'My Trip', NOW(), NOW());`
