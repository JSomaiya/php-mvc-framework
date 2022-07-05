<?php
// site name
define('SITE_NAME', 'your-site-name');

// App Root
define('APP_ROOT', dirname((dirname(__FILE__))));
define('URL_ROOT', '/');

$_host = 'localhost';
$_dbname = 'mvc_test';
$_user = 'jai';
$_pass = '123456';
    
try {
    $_db = new PDO('mysql:host=' . $_host . ';dbname=' . $_dbname, $_user, $_pass);
    define('CONN', $_db);
} catch (\Throwable $th) {
    echo "Database connection failed";
};


?>