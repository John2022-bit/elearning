<?php
require_once 'db.php';
$pdo = getPDO();
$courses = $pdo->query("SELECT * FROM courses")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Select Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Select a Course</h2>
    <form method="get" action="test.html">
        <select name="course_id" class="form-control mb-2">
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id'] ?>"><?= $course['title'] ?></option>
            <?php endforeach; ?>
        </select>
        <button class="btn btn-success">Start Test</button>
    </form>
</body>
</html>
