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
    <h3>Vos réponses</h3>
    <ul>
        <li>Style d'apprentissage : <?php echo htmlspecialchars($_POST['style'] ?? ''); ?></li>
        <li>Disponibilité hebdomadaire : <?php echo htmlspecialchars($_POST['hours'] ?? ''); ?> heures</li>
        <li>Centres d'intérêt : <?php echo htmlspecialchars($_POST['interests'] ?? ''); ?></li>
        <li>Âge : <?php echo htmlspecialchars($_POST['age'] ?? ''); ?></li>
        <li>École fréquentée l'année dernière : <?php echo htmlspecialchars($_POST['previous_school'] ?? ''); ?></li>
        <li>Expérience professionnelle : <?php echo htmlspecialchars($_POST['experience'] ?? ''); ?></li>
        <li>Dernier diplôme obtenu : <?php echo htmlspecialchars($_POST['last_degree'] ?? ''); ?></li>
        <li>Diplôme en préparation : <?php echo htmlspecialchars($_POST['current_degree'] ?? ''); ?></li>
        <li>Spécialité souhaitée : <?php echo htmlspecialchars($_POST['desired_specialty'] ?? ''); ?></li>
        <li>Classe fréquentée l'année dernière : <?php echo htmlspecialchars($_POST['last_class'] ?? ''); ?></li>
        <li>Aimiez-vous cette école ? <?php echo htmlspecialchars($_POST['liked_school'] ?? ''); ?></li>
        <li>Aviez-vous des amis à l'école ? <?php echo htmlspecialchars($_POST['friends_school'] ?? ''); ?></li>
        <li>Matières préférées : <?php echo htmlspecialchars($_POST['favorite_subjects'] ?? ''); ?></li>
        <li>Satisfait(e) d'intégrer notre établissement ? <?php echo htmlspecialchars($_POST['satisfied_institution'] ?? ''); ?></li>
        <li>Cela correspond-il à vos souhaits ? <?php echo htmlspecialchars($_POST['match_wishes'] ?? ''); ?></li>
        <li>Si non, qu'auriez-vous préféré faire ? <?php echo htmlspecialchars($_POST['preferred_alternative'] ?? ''); ?></li>
        <li>Métier souhaité : <?php echo htmlspecialchars($_POST['desired_job'] ?? ''); ?></li>
        <li>Moyen de transport : <?php echo htmlspecialchars($_POST['transport'] ?? ''); ?></li>
        <li>Accès ordinateur/internet : <?php echo htmlspecialchars($_POST['access_devices'] ?? ''); ?></li>
        <li>Genre d'apprenant : <?php echo htmlspecialchars($_POST['learner_type'] ?? ''); ?></li>
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
        <h4>Questions supplémentaires</h4>
        <div class="mb-3">
            <label>Quel est votre âge ?</label>
            <input type="number" name="age" class="form-control" min="0">
        </div>
        <div class="mb-3">
            <label>École fréquentée l'année dernière</label>
            <input type="text" name="previous_school" class="form-control">
        </div>
        <div class="mb-3">
            <label>Expérience professionnelle</label>
            <textarea name="experience" class="form-control" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label>Dernier diplôme obtenu</label>
            <input type="text" name="last_degree" class="form-control">
        </div>
        <div class="mb-3">
            <label>Diplôme en préparation</label>
            <input type="text" name="current_degree" class="form-control">
        </div>
        <div class="mb-3">
            <label>Dans quelle spécialité souhaitez-vous vous inscrire ?</label>
            <input type="text" name="desired_specialty" class="form-control">
        </div>
        <div class="mb-3">
            <label>Classe fréquentée l'année dernière</label>
            <input type="text" name="last_class" class="form-control">
        </div>
        <div class="mb-3">
            <label>Aimiez-vous cette école ?</label>
            <select name="liked_school" class="form-select">
                <option value="">Choisir...</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Aviez-vous des amis à l'école ?</label>
            <select name="friends_school" class="form-select">
                <option value="">Choisir...</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Quels étaient vos matières préférées et pourquoi ?</label>
            <textarea name="favorite_subjects" class="form-control" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label>Êtes-vous satisfait(e) d'intégrer notre établissement ?</label>
            <select name="satisfied_institution" class="form-select">
                <option value="">Choisir...</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cela correspond-il à vos souhaits ?</label>
            <select name="match_wishes" class="form-select">
                <option value="">Choisir...</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Si non, qu'auriez-vous préféré faire ?</label>
            <input type="text" name="preferred_alternative" class="form-control">
        </div>
        <div class="mb-3">
            <label>Quel métier souhaitez-vous exercer ?</label>
            <input type="text" name="desired_job" class="form-control">
        </div>
        <div class="mb-3">
            <label>Quel est votre moyen de transport ?</label>
            <input type="text" name="transport" class="form-control">
        </div>
        <div class="mb-3">
            <label>Avez-vous accès à un ordinateur, à internet ?</label>
            <input type="text" name="access_devices" class="form-control">
        </div>
        <div class="mb-3">
            <label>Quel genre d'apprenant êtes-vous ?</label>
            <select name="learner_type" class="form-select">
                <option value="visuel">Visuel</option>
                <option value="auditif">Auditif</option>
                <option value="pratique">Pratique</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
<?php endif; ?>
</body>
</html>
