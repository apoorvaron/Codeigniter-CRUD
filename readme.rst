###################
How to Run in Local
###################
  
-   Php is Installed 
-   xampp or mamp and Composer is Downloaded
-   Run xampp or mamp servers
-   Download Zip & unzip it 
-   rename folder to ("codeigniter-CRUD")
-   move folder to htdocs/
-   Create database with name "codeigniter-CRUD"
-   import sql file in phpmyadmin from "/" directory
-   change credentials in htdocs/codeigniter/application/config/database.php
-   Then run in browser localhost/codeigniter-CRUD/crud


######################################
How do i made this Project
######################################

-   Downloaded codeigniter 3 inital code from " https://codeigniter.com/download "
-   Basically MVC ( Model - View - Controller )
-   Model       -    having php class & query
-   View        -    having frontend part
-   Controller  -    handle http request 
-   Change htdocs/codeigniter-CRUD/application/config/config.php 

		- Base url to " http://localhost:8888/codeigniter-CRUD/ "
		- Index_page to ""
		
-   URL have controller class names
-   made .htaccess to remove index.php from http://localhost:8888/codeigniter-CRUD/index.php
-   use of base_url(); function , to use it change in autoload.php ( $autoload['helper'] = array('url'); )
-   Make dummy table in db ( localhost/phpmyadmin )
-   change in autoload.php ($autoload['libraries'] = array('database','form_validation','session');)
-   Also change in database.php , change credentials 
-   for loading the model , change autoload.php $autoload['model'] = array('crud_model');

-   for CRUD - change MVC files only 
