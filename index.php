<?php
require_once 'app.php';

$questions = $quizService->showQuiz();
$app->loadTemplate("quiz_frontend", $questions);

