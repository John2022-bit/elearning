
<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (!empty($name) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

        try {
            $stmt->execute([$name, $email, $hashed_password]);
            header("Location: login.html?success=1");
        } catch (PDOException $e) {
            echo "Erreur lors de l'inscription : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
