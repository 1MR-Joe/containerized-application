<?php
declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class ProfileController
{
    public function __construct(
        private readonly Twig $twig,
    ){
    }

    public function index(Request $request, Response $response) {
        return $this->twig->render($response, '/views/profile.twig');
    }
}