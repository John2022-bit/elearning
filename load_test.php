<?php
require_once 'db.php';

$courseId = $_GET['course_id'];
$pdo = getPDO();

$stmt = $pdo->prepare("SELECT * FROM questions WHERE course_id = ? ORDER BY RAND() LIMIT 10");
$stmt->execute([$courseId]);
$questions = $stmt->fetchAll();

echo json_encode($questions);
?>