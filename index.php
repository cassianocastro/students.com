<?php
require_once __DIR__ . '/vendor/autoload.php';

/**
 * @test
 */
function canAccessApiWithAuthorization(string $user, string $password): void
{
    define("URL", "http://www.api.students.com");

    $auth = base64_encode("$user:$password");

    $options = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Basic $auth"
        ]
    ];

    $context = stream_context_create($options);
    $content = @file_get_contents(URL, false, $context);

    echo ($content === false) ? "Unauthorized!" : "Authorized!";
}

/**
 *
 */
function index()
{
    error_reporting(E_ALL);
    ini_set("display_errors", true);

    (new App\controller\HomeController())->index();
}

index();