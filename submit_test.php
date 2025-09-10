<?php
require_once 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$userId = $data['user_id'];
$responses = $data['responses'];

$pdo = getPDO();

foreach ($responses as $response) {
    $questionId = $response['question_id'];
    $answer = $response['answer'];

    $stmt = $pdo->prepare("SELECT correct_answer FROM questions WHERE id = ?");
    $stmt->execute([$questionId]);
    $correct = $stmt->fetchColumn();

    $isCorrect = strtolower(trim($correct)) === strtolower(trim($answer));
    $stmt = $pdo->prepare("INSERT INTO user_answers (user_id, question_id, user_answer, is_correct) VALUES (?, ?, ?, ?)");
    $stmt->execute([$userId, $questionId, $answer, $isCorrect]);
}

// Call recommendation engine (simplified)
$stmt = $pdo->prepare("
    SELECT module_id, COUNT(*) as correct_count
    FROM questions q
    JOIN user_answers ua ON q.id = ua.question_id
    WHERE ua.user_id = ? AND ua.is_correct = 1
    GROUP BY module_id
    ORDER BY correct_count DESC
    LIMIT 1
");
$stmt->execute([$userId]);
$topModule = $stmt->fetch();

echo json_encode(['recommended_module_id' => $topModule['module_id']]);
?>
