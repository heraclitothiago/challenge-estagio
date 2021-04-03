<?php


namespace Source\Application;


/**
 * Class Controller
 * @package Source\Application
 *
 * @author Heráclito Thiago
 */
class Controller
{
    /**
     * @var View
     */
    protected $view;

    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct(string $pathToViews = null)
    {
        $this->view = new View($pathToViews);
    }

}