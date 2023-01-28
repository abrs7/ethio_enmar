<?php
// echo "<pre";
// print_r($_SERVER);
define('APP_NAME', 'Ethio-Enmar');
define('APP_DESC', 'Free and Paid tutorials');



if($_SERVER['SERVER_NAME'] == 'localhost'){
    // database config for local server
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
 define('ROOT', 'http://localhost/udemy/public');

}else
{
    //database config for live server
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
    define('ROOT', 'http://localhost/udemy/public');

};

    