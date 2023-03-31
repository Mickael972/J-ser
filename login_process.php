<?php require_once __DIR__ . '/bdd/pdo.php';
session_start();

$name = $_POST['name'];
$password = $_POST['password'];
var_dump($_POST);
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE null, name=:nom AND mdp=:pass");

$result = $stmt->execute([
    null,
    'nom' => $name,
    'mdp' => $password
]);

if ($result == true)
{
    $_SESSION ['isconnected'] = true;
    header('Location: index.php');
}
else{
    exit;
}
var_dump($result);
