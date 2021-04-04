<?php


namespace Source\Application;

use League\Plates\Engine;

/**
 * Class View
 * @package Source\Application
 *
 * @author Heráclito Thiago
 */
class View
{
    /** @var Engine */
    private $engine;

    /**
     * View constructor.
     * @param string $path
     * @param string $ext
     */
    public function __construct(string $path = __DIR__ . "/../../theme/app", string $ext = "php")
    {
        $this->engine = Engine::create($path, $ext);
    }

    /**
     * @param string $templateName
     * @param array $data
     * @return string
     */
    public function render(string $templateName, array $data): string
    {
        return $this->engine->render($templateName, $data);
    }

    /**
     * @return Engine
     */
    public function engine(): Engine
    {
        return $this->engine();
    }
}
