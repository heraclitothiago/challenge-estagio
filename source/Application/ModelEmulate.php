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
     * @param int|null $userId
     * @return array|null
     */
    public function getAllPosts(int $userId = null): ?array
    {
        //load json and covert to assoc array
        $postList = file_get_contents(CONF_API_ADDRESS
            . (!isset($userId) ? "" : "?userId=" . $userId)
        );
        $postCollection = json_decode($postList, true);
        return $postCollection;
    }


    public function getPost(int $userId, int $postId)
    {
        if (!isset($userId) || !isset($postId)) {
            return "Informe o UserId e o id do Post";
        }
        if (!is_int($userId) || !is_int($postId)) {
            return "UserId e Post Id devem ser números inteiros";
        }
        $url = CONF_API_ADDRESS . "?postId={$userId}&id={$postId}";
        $post = file_get_contents($url);
        $postDecoded = json_decode($post, true);
        $post = $postDecoded[0];
        return $post;
    }

}