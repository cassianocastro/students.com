<?php
declare(strict_types=1);

namespace App\controller;

use Api\Http\{ Request, Response };
use Api\Models\Helpers\JSONParser;
use App\view\JSONDocument;

/**
 *
 */
final class ErrorController
{

    public function index(Request $request): Response
    {
        $json = (new JSONParser())->encodeToJSON("Verify the typed URL.");

        return new Response(404, new JSONDocument($json));
    }
}