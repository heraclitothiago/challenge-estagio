<?php


namespace Source\Application;

use Source\Application\ModelEmulate;

class ListPosts extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../theme/app/");
    }

    public function home(array $data): void
    {
        //load json and covert to assoc array
        $postCollection = (new ModelEmulate())->getAllPosts(($data['userId']) ?? null);

        //create pagination
        $total = count($postCollection);

        $pagination = new Pager(url('/post/p/{page}'));
        $pagination->pager($total, 6, ($data['page'] ?? 1));

        //render page
        echo $this->view->render("view1", [
            "posts" => $postCollection,
        ]);
    }

    /**
     * @param array $data
     */
    public function post(array $data): void
    {
        $post = (new ModelEmulate())->getPost($data['userId'], $data['id']);
        echo $this->view->render("view2", [
            'post' => $post
        ]);
    }

    public function posts(array $data)
    {

        echo $this->view->render('view2',[
            //'pagination' => $pagination
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