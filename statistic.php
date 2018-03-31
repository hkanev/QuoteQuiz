<?php
require_once 'app.php';

$time1 = new DateTime($_COOKIE["startTime"]);
$time2 = new DateTime($_COOKIE["endTime"]);
$diff=date_diff($time1,$time2);
$duration = $diff->format("%H:%I:%S");

$score = $_COOKIE["score"];
$results = $quizService->getHighestResults();

$data = ['score' => $_COOKIE["score"], 'duration' => $duration, 'results' => $results];

if (isset($_POST['saveScore'])) {
    $player = $_POST['player'];
    $time = $_POST['duration'];
    if($player){
        $quizService->saveResult($score, $time, $player);
    }
    header("Location: index.php");
    exit;
}

$app->loadTemplate("statistic_frontend", $data);
