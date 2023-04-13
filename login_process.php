<?php 
require_once __DIR__ . '/bdd/pdo.php';
require_once __DIR__. '/functions/functions.php';

// je recupere les données post de l'utilisateur email et mot de passe //
$email = $_POST['email'];
$password = $_POST['password'];

// selection de l'email correspondant à l'utilisateur//
$query = "SELECT * FROM utilisateurs WHERE email = '$email'";
$stmt = $pdo->prepare($query);

$stmt->execute();

$userfound = $stmt->fetch();

if ($userfound && password_verify($password, $userfound['password']) ) {
    redirect('index.php');
}else{
    echo "<h1>Error!</h1>";
}