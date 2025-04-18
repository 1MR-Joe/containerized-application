<?php
declare(strict_types=1);

use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function(App $app) {
    $container = $app->getContainer();

    // loading twig from the container to attach twig middleware to the app
    $app->add(TwigMiddleware::create($app, $container->get(Twig::class)));
};