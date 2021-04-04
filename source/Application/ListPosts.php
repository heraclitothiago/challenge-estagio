<?php


namespace Source\Application;


class ListPosts extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../theme/app/");
    }

    public function home(array $data): void
    {
        //load json and covert to assoc array
        $postList = file_get_contents(CONF_API_ADDRESS);
        $postCollection = json_decode($postList, true);

        //create pagination
        $pagination = new Pager(url('/post/p/'));
        $pagination->pager(count($postCollection), 9, ($data['page'] ?? 1));

        //render page
        echo $this->view->render("view1", [
            "posts" => $postCollection,
            "pagination" => $pagination->render('')
        ]);
    }

    public function posts()
    {
        $params = null;
        echo $this->view->render("view2", [
            "params" => $params
        ]);
    }

    public function error()
    {
        $params = 'null';
        echo $this->view->render("view2", [
            "params" => $params
        ]);
    }
}