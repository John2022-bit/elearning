<?php
session_start();

$recommendation = null;
$score = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = [
        'q1' => 'b',
        'q2' => 'c',
        'q3' => 'a',
        'case' => 'solution',
    ];

    if (isset($_POST['q1']) && $_POST['q1'] === $answers['q1']) $score++;
    if (isset($_POST['q2']) && $_POST['q2'] === $answers['q2']) $score++;
    if (isset($_POST['q3']) && $_POST['q3'] === $answers['q3']) $score++;
    if (isset($_POST['case']) && strtolower(trim($_POST['case'])) === $answers['case']) $score++;

    $recommendation = $score >= 3 ? 'Parcours avancé' : 'Parcours débutant';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Positionnement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<?php if ($recommendation): ?>
    <h2>Résultat du positionnement</h2>
    <p>Score : <?php echo $score; ?>/4</p>
    <p>Parcours recommandé : <?php echo $recommendation; ?></p>
    <h3>Vos préférences</h3>
    <ul>
        <li>Style d'apprentissage : <?php echo htmlspecialchars($_POST['style'] ?? ''); ?></li>
        <li>Disponibilité hebdomadaire : <?php echo htmlspecialchars($_POST['hours'] ?? ''); ?> heures</li>
        <li>Centres d'intérêt : <?php echo htmlspecialchars($_POST['interests'] ?? ''); ?></li>
    </ul>
<?php else: ?>
    <h2>Espace de Positionnement</h2>
    <form method="post">
        <h4>QCM</h4>
        <div class="mb-3">
            <label>1. Quelle est la capitale de la France ?</label>
            <select name="q1" class="form-select" required>
                <option value="">Choisir...</option>
                <option value="a">Lyon</option>
                <option value="b">Paris</option>
                <option value="c">Marseille</option>
            </select>
        </div>
        <div class="mb-3">
            <label>2. 2 + 2 = ?</label>
            <select name="q2" class="form-select" required>
                <option value="">Choisir...</option>
                <option value="a">3</option>
                <option value="b">5</option>
                <option value="c">4</option>
            </select>
        </div>
        <div class="mb-3">
            <label>3. Quelle lettre vient après C ?</label>
            <select name="q3" class="form-select" required>
                <option value="">Choisir...</option>
                <option value="a">D</option>
                <option value="b">E</option>
                <option value="c">B</option>
            </select>
        </div>
        <h4>Question ouverte</h4>
        <div class="mb-3">
            <label>En quelques mots, pourquoi souhaitez-vous suivre cette formation ?</label>
            <textarea name="open" class="form-control" rows="3"></textarea>
        </div>
        <h4>Cas pratique</h4>
        <div class="mb-3">
            <label>Si un client n'est pas satisfait, que proposez-vous comme solution ?</label>
            <input type="text" name="case" class="form-control" required>
        </div>
        <h4>Préférences d'apprentissage</h4>
        <div class="mb-3">
            <label>Style d'apprentissage préféré</label>
            <select name="style" class="form-select">
                <option value="visuel">Visuel</option>
                <option value="auditif">Auditif</option>
                <option value="pratique">Pratique</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Disponibilité (heures par semaine)</label>
            <input type="number" name="hours" class="form-control" min="1">
        </div>
        <div class="mb-3">
            <label>Centres d'intérêt</label>
            <input type="text" name="interests" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
<?php endif; ?>
</body>
</html>
