<?php


namespace Source\Application;


class ListPosts extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../theme/app/");
    }

    public function home()
    {
        $params = null;
        echo $this->view->render("view1",[
            "params" => $params
        ]);
    }

    public function error()
    {

    }
}