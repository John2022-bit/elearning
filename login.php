<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];
        $_SESSION["user_role"] = $user["role"]; 

        switch ($user['role']) {
            case 'etudiant':
                header("Location: compte_user.php");
                break;
            case 'formateur':
                header("Location: dashboard.php");
                break;
            case 'administrateur':
                header("Location: Admin_Doc/dashboard.php"); 
                break;
            default:
                
                header("Location: index.php");
                break;
        }
        exit(); 
    } else {
        echo "Identifiants incorrects.";
    }
}
?>
