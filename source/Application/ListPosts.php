<?php


namespace Source\Application;

use Source\Application\ModelEmulate;

class ListPosts extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../theme/app/");
    }

    /**
     * PAGE HOME
     * Método responsável por listar todos os posts da API
     * @param array $data
     */

    private function getApiData()
    {
        //load json and covert to assoc array
        $postList = file_get_contents(CONF_API_ADDRESS);
        $postCollection = json_decode($postList, true);
        return $postCollection;
    }

    public function home(array $data): void
    {
        //load json and covert to assoc array
        $postCollection = (new ModelEmulate())->getAllPosts(($data['userId']) ?? null);

        //create pagination
        $pagination = new Pager(url('/post/p/'));
        $pagination->pager(count($postCollection), 9, ($data['page'] ?? 1));

        //render page
        echo $this->view->render("view1", [
            "posts" => $postCollection,
            "pagination" => $pagination->render('')
        ]);
    }

    public function posts(array $array)
    {
        $params = null;
        echo $this->view->render("view2", [
            "post" => $params
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

    public function error()
    {
        $params = 'null';
        echo $this->view->render("view2", [
            "params" => $params
        ]);
    }
}