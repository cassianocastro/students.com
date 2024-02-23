<?php
declare(strict_types=1);

namespace App\controller;

use App\view\HTMLDocument;

/**
 *
 */
final class HomeController
{

    public function index(): void
    {
        print (new HTMLDocument("home.php"))->getContent();
    }
}