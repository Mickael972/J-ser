<?php

$dbconfig = parse_ini_file(__DIR__ . '/../config/db.ini');
[
  'DB_HOST' => $host,
  'DB_PORT' => $port,
  'DB_NAME' => $name,
  'DB_CHARSET' => $charset,
  'DB_USER' => $user,
  'DB_PASSWORD' => $password,
] = $dbconfig;

$dsn = "mysql:host=$host;port=$port;dbname=$name;dbcharset=$charset;dbuser=$user;dbpassword=$password";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];


try {
  $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
  exit('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}
