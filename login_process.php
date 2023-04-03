<?php 
require_once __DIR__ . '/bdd/pdo.php';

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM utilisateurs WHERE email = '$email'";
$stmt = $pdo->prepare($query);

$stmt->execute();

$userfound = $stmt->fetch();

if ($userfound && password_verify($password, $userfound['password']) ) {
    echo "<h1>Thank you!</h1>";
}else{
    echo "<h1>Error!</h1>";
}