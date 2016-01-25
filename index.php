<?php

require_once 'vendor/autoload.php';

$testProvider = new Chabanenko\SimpleQuiz\DataProvider\TestProvider();
session_start();

if (!isset($_SESSION['statistics'])) {
    $_SESSION['statistics'] = [];
}

if (array_key_exists('answer', $_POST) && array_key_exists('question', $_SESSION)) {
    $chosenAnswer = $_POST['answer'];
    $generatedQuestion = $_SESSION['question'];
    $statistics = $_SESSION['statistics'];
    if (isset($statistics[$generatedQuestion['term']])) {
        $termStatistics = $statistics[$generatedQuestion['term']];
    } else {
        $termStatistics = [
            'total_answers' => 0,
            'correct_answers' => 0,
        ];
    }

    $termStatistics['total_answers']++;

    if ($chosenAnswer == $generatedQuestion['correctDescriptionNumber']) {
        $termStatistics['correct_answers']++;
        $correct = true;
    }

    $statistics[$generatedQuestion['term']] = $termStatistics;

    $_SESSION['statistics'] = $statistics;

    require_once 'views/render_statistics.php';

} else {
    $question = $testProvider->getRandomQuestionByTerm();
    $_SESSION['question']  = $question;
    require_once 'views/render_question.php';
}

