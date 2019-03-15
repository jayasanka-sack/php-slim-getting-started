<?php
require '../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);



$app->get('/cars', function ($request, $response, $args) {

    $cars = array("Volvo", "BMW", "Toyota");


    return $response->withStatus(201)->withJson($cars);

});


try {
    $app->run();
} catch (\Slim\Exception\MethodNotAllowedException $e) {
} catch (\Slim\Exception\NotFoundException $e) {
} catch (Exception $e) {
    echo 'error';
}

