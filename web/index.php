<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function () {
    return '<p>Hello World!</p><p><a href="basket/">Basket</a></p>';
});

$app->get('basket/', function () {

    $html = '<h1>Basket</h1>';

    $basket = new \Shopping\Basket\Basket();

    if (! empty($basket)) {
        $html .= '<table><tr><th>Fruit</th><th>Calories</th></tr>';
        foreach ($basket as $fruit) {
            $html .= '<tr><td>' . $fruit->getName() .
                '</td><td>' . $fruit->getCalories() . '</td></tr>';
        }
        $html .= '</table>';
    } else {
        $html .= '<p>Basket is empty</p>';
    }

    return $html;

});

$app->run();