<?php
declare(strict_types=1);

namespace App\controller;

/**
 *
 */
final class InfoController
{

    public function index(): void
    {
        echo "<pre>", print_r($_SERVER), "</pre>";
    }
}