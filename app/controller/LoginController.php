<?php
declare(strict_types=1);

namespace App\controller;

use Api\Http\{ Request, Response };
use App\view\HTMLDocument;

/**
 *
 */
final class LoginController
{

    public function index(Request $request): Response
    {
        return new Response(200, (new HTMLDocument("login.php"))->getContent());
    }
}