<?php
declare(strict_types=1);

namespace App\view;

/**
 *
 */
final class HTMLDocument implements Document
{

    private string $path;
    private mixed $params;

    public function __construct(string $path, mixed $params = NULL)
    {
        $this->path   = __DIR__ . "/../../public/html/$path";
        $this->params = $params;
    }

    public function getContent(): string
    {
        ob_start();

        require_once $this->path;

		$content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}