<?php
declare(strict_types=1);

namespace Api\Controllers;

use Api\Http\{ Request, Response };
use Api\Views\HTMLDocument;

/**
 *
 */
final class HomeController
{

    public function index(Request $request): Response
    {
        return new Response(200, new HTMLDocument("home.php"));
    }
}