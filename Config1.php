<?php
 // Database configuration
   // define('DB_USERNAME', 'root');
  // define('DB_PASSWORD', '');
  // define('DB_HOST', 'localhost');
  // define('DB_NAME', 'bbms');
//	define('DB_USERNAME', 'adminRXeACtm');
 //   define('DB_PASSWORD', 'GEKWxRaUn3gM');
   // define('DB_HOST', 'https://php-bloodbankms.rhcloud.com');
   // define('DB_NAME', 'php');
    define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
   define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
   define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
   define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
   define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));
?>
