<?php
require '../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);



$app->get('/my-path', function ($request, $response, $args) {

    $payload = ['cat', 'dog'];

    return $response->withStatus(201)->withJson($payload);

});


try {
    $app->run();
} catch (\Slim\Exception\MethodNotAllowedException $e) {
} catch (\Slim\Exception\NotFoundException $e) {
} catch (Exception $e) {
    echo 'error';
}

