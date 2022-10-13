<?php
include_once('../includes/connection.php');

if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) or empty($email) or empty($password)) {
        $error = 'All fields are required!';
    } else {
        $query = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $query->bindValue(1, $name);
        $query->bindValue(2, $email);
        $query->bindValue(3, $password);

        $query->execute();

        header('Location: ../views/login.php');
    }
}
