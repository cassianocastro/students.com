<?php
declare(strict_types=1);

namespace App\controller;

/**
 *
 */
final class ErrorController
{

    public function index(): void
    {
        http_response_code(404);
    }
}