<?php require_once __DIR__.'/bdd/pdo.php';

$name = $_POST['name'];
$password = $_POST['password'];
$stmt = $conn->prepare('SELECT * FROM utilisateurs WHERE name = :name');
$stmt->execute(array(':name' => $name));
$row = $stmt->fetch();
var_dump($row);