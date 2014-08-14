<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function () {
    return '<p>Hello World!</p><p><a href="basket/">Basket</a></p>';
});

$app->get('basket/', function () {

    $html = '<h1>Basket</h1>';
    return $html;

});

$app->run();