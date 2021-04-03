<?php


namespace Source\Application;


class Controller
{
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