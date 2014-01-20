<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'mode' => 'development',
    'log.level' => \Slim\Log::DEBUG
));

require '../config.php';

$view = $app->view();
$view->setTemplatesDirectory('../templates');

$app->hook('slim.before', function () use ($app) {
    $app->view()->appendData(array('baseUrl' => 'quotes_api'));
});

$app->get('/api/quotes', function () use ($app) {
    $quotes = Quote::all();

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode(array(
        'quotes' => $quotes->toArray(),
    ));
});

$app->get('/quotes/rss', function () use ($app) {
    $quotes = Quote::all();

    $app->response()->header('Content-Type', 'text/xml');

    $app->render('rss.php', array(
        'quotes' => $quotes->toArray(),
    ));
});

$app->get('/quotes', function () use ($app) {

    $app->render('index.php');
});

$app->run();
