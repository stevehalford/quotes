<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->view(new \JsonApiView());
$app->add(new \JsonApiMiddleware());

$app->get('/', function () use ($app) {
    $app->render(200, array(
        'msg' => 'welcome to my API!',
    ));
});

$app->run();
