<?php

require_once 'bdd/pdo.php';


['email' => $email, 'pseudo' => $pseudo, 'password' => $password] = $_POST;

if (empty($_POST) ||!isset($_POST['email']) ||!isset($_POST['password']) ||!isset($_POST['pseudo'])) {
    header('location:login.php');
    exit;
}

// pour ma requète de création d'utilisateur j'ai eu une erreur de type "parameter number of bound variables" et donc j'ai inséré des paramtres anonymes dans ma query//
$query = "INSERT INTO utilisateurs VALUES(?, ?, ?, ?)";
$stmt = $pdo->prepare($query);


try {
$stmt->execute([
    null,
    $pseudo,
    $email,
    password_hash($password, PASSWORD_DEFAULT)
]);
} catch (PDOException $e) {
    echo "Erreur lors de la création de utilisateurs : " . $e->getcode() . " / " . $e->getMessage();
    exit;
}

header('location:login.php');