<?php
declare(strict_types=1);

namespace App\controller;

use Api\Http\{ Request, Response, Server };
use App\view\HTMLDocument;

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