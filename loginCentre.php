<?php
session_start(); // Assurez-vous de démarrer la session

$servername = "127.0.0.1:3306";
$username = "u501368352_First";
$password = "xRdfd7&wI0";
$dbname = "u501368352_DB_CFAA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredCode = isset($_POST['code']) ? trim($_POST['code']) : '';

    // Préparer et lier
    $stmt = $conn->prepare("SELECT id, redirect_path FROM etablissement_codes WHERE code = ?");
    $stmt->bind_param("s", $enteredCode);

    // Exécuter la requête
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Récupérer les détails de l'établissement
        $result = $stmt->get_result();
        $etablissement = $result->fetch_assoc();

        // Définir l'ID de l'établissement dans la session
        $_SESSION['etablissement_id'] = $etablissement['id'];

        // Rediriger vers la page d'accueil spécifique de l'établissement
        header('Location: ' . $etablissement['redirect_path']);
        exit;
    } else {
        $error = 'Code incorrect. Veuillez réessayer.';
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Connexion - FPCA Tarn-et-Garonne</title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .full-bg {
            background: url('img/banner-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-wrap {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .form-logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 150px;
        }
    </style>
</head>
<body>
    <div class="full-bg">
        <form action="" class="form-wrap p-4 rounded" method="POST" style="width: 100%; max-width: 400px;">
            <h4 class="text-white text-center mb-4">Entrez votre code établissement</h4>
            <input class="form-control mb-3" name="code" placeholder="Code établissement" type="text"/>
            <button class="btn btn-primary w-100" type="submit">Valider</button>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger mt-3">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>

