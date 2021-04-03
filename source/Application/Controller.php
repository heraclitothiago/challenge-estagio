<?php


namespace Source\Application;


class Controller
{
    protected $view;

    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct($view)
    {
        $this->view = $view;
    }

}