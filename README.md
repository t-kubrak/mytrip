# mytrip

**[Live version with examples](http://tkwebdev.xyz/)**

##Installation

1. Open the command line utility, `git clone https://github.com/t-kubrak/mytrip.git`
2. `cd mytrip` - change directory to root project folder
3. `composer install` - installs all dependencies. See the following [link](https://getcomposer.org/doc/00-intro.md) if you don't have it
4.  Copy **.env.example** file in the root folder (mytrip) and rename it to **.env**
5.  `php artisan key:generate` generates application key
6.  Change database connection settings in **.env** file. 
	1. For example
		- DB_CONNECTION=mysql
		- DB_HOST=127.0.0.1
		- DB_PORT=3306
		- DB_DATABASE=trips
		- DB_USERNAME=dbAdmin
		- DB_PASSWORD=password
	2. If we use database other than MySQL, we need to change default database connection in *mytrip/config/database.php*
		- `'default' => env('DB_CONNECTION', 'pgsql')`
	3. Also, we need to make sure that PDO extension for our database engine is enabled in *php.ini* configuration file. For example, `extension=php_pdo_mysql.dll`. See the following [link](http://php.net/manual/en/pdo.installation.php) for more details.
7.  Create database, user and add some data. Optional: if we use MySQL db engine, we can execute SQL script in *mytrip/databases/trips.sql* and skip the rest of installation.
	1. For MySQL we can use the following commands:
	  	- `CREATE DATABASE trips CHARACTER SET utf8 COLLATE utf8_unicode_ci;`
	  	- `CREATE USER 'dbAdmin'@'localhost' IDENTIFIED BY 'password';`
	  	- `GRANT ALL ON trips.* TO 'dbAdmin'@'localhost';`
	2. `php artisan:migrate` - this command creates database tables
	3. Add some data to airports and trips tables.
	  	- `INSERT INTO airports VALUES ('JFK', 'John F.Kennedy International Airport','New York','USA', NOW(), NOW());`
	  	- `INSERT INTO airports VALUES ('YYZ', 'Toronto Pearson International Airport','Toronto','Canada', NOW(), NOW());`
	  	- `INSERT INTO airports VALUES ('CDG', 'Charles de Gaulle Airport','Paris','France', NOW(), NOW());`
	  	- `INSERT INTO trips VALUES (1, 'My Trip', NOW(), NOW());`
