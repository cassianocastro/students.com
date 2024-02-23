<?php
declare(strict_types=1);

namespace App\controller;

use App\view\HTMLDocument;

/**
 *
 */
final class LoginController
{

    public function index(): void
    {
        print (new HTMLDocument("login.php"))->getContent();
    }
}