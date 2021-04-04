<?php


namespace Source\Application;


/**
 * Class ModelEmulate
 * @package Source\Application
 * @author Heráclito Thiago
 */
class ModelEmulate
{
    /**
     * @var string
     */
    private $postCollection = CONF_API_ADDRESS;

    /**
     * @return string
     */
    public function getPostCollection(): string
    {
        return $this->postCollection;
    }

    /**
     * @param string $postCollection
     */
    public function setPostCollection(string $postCollection): void
    {
        $this->postCollection = $postCollection;
    }

    /**
     * @param int|null $userId
     * @return array|null
     */
    public function getAllPosts(int $userId = null): ?array
    {
        //load json and covert to assoc array
        $postList = file_get_contents($this->getPostCollection()
            . (!isset($userId) ? "" : "?userId=" . $userId)
        );
        $postCollection = json_decode($postList, true);
        return $postCollection;
    }


    /**
     * @param int $userId
     * @param int $postId
     * @return mixed|string
     */
    public function getPost(int $userId, int $postId){
        if (!isset($userId) || !isset($postId)){
            return "Informe o UserId e o id do Post";
        }
        if (!is_int($userId) || !is_int($postId)){
            return "UserId e Post Id devem ser números inteiros";
        }
        return $this->getAllPosts($userId)[$postId];
    }

}