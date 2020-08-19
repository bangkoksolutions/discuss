<?php return array (
  'debug' => false, // enables or disables debug mode, used to troubleshoot issues
  'database' => array (
    'driver' => 'mysql', // the database driver, i.e. MySQL, MariaDB...
    'host' => 'mysql', // the host of the connection, localhost in most cases unless using an external service
    'database' => 'discuss', // the name of the database in the instance
    'username' => 'discuss', // database username
    'password' => 'pp6321', // database password
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '', // the prefix for the tables, useful if you are sharing the same database with another service
    'port' => '3306', // the port of the connection, defaults to 3306 with MySQL
    'strict' => false,
  ),
    //   'url' => 'https://flarum.localhost', // the URL installation, you will want to change this if you change domains
  'paths' => array (
    'api' => 'api', // /api goes to the API
    'admin' => 'admin', // /admin goes to the admin
  ),
);