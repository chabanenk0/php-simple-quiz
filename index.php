<?php

require_once 'vendor/autoload.php';

session_start();

if (!isset($_SESSION['statistics'])) {
    $_SESSION['statistics'] = [];
}

$app = new \Slim\App();
$app->map(['GET', 'POST'], '/tests/{id}', function ($request, $response, $args) {
    $testId = $args['id'];
    switch ($testId) {
        case 1: {
            $testProvider = new Chabanenko\SimpleQuiz\DataProvider\StringFunctionsTestProvider();
            $question = $testProvider->getRandomQuestionByTerm();
            $templatePath = 'views/render_question.php';
            break;
        }
        default: {
            $templatePath = 'views/tests_list.php';
            break;
        }
    }

    if ($request->isGet()) {
        $_SESSION['question']  = $question;
        require_once $templatePath;
    } else {
        $chosenAnswer = $request->getParam('answer');
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

        if ($chosenAnswer == $generatedQuestion['correctItemNumber']) {
            $termStatistics['correct_answers']++;
            $correct = true;
        }

        $statistics[$generatedQuestion['term']] = $termStatistics;

        $_SESSION['statistics'] = $statistics;

        require_once 'views/render_statistics.php';
    }
})->setName('tests');;

$app->get('/', function($request, $response, $args) {
    $templatePath = 'views/tests_list.php';
    require_once $templatePath;
})->setName('home');

$app->get('/reset', function($request, $response, $args) {
    unset($_SESSION['question']);
    unset($_SESSION['statistics']);
    $templatePath = 'views/tests_list.php';
    require_once $templatePath;
})->setName('reset');


$app->run();