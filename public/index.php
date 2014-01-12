<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'mode' => 'development',
    'log.level' => \Slim\Log::DEBUG
));

require '../config.php';

$app->view(new \JsonApiView());
$app->add(new \JsonApiMiddleware());

$app->get('/quotes', function () use ($app) {
    $quotes = Quote::all();

    $app->render(200, array(
        'quotes' => json_encode($quotes->toArray()),
    ));
});

$app->run();
