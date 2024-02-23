<?php
declare(strict_types=1);

namespace Api\Controllers;

use Api\Http\{ Request, Response, Server };
use Api\Views\HTMLDocument;

/**
 *
 */
final class InfoController
{

    public function index(Request $request): Response
    {
        $info = (new Server())->getAll();

        return new Response(200, new HTMLDocument("info.php", $info));
    }
}