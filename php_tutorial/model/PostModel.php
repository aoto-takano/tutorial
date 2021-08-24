<?php

require_once('Model.php');

/**
 * Class PostModel
 */
class PostModel extends Model
{

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * PostModel constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->pdo = parent::getPdo();
    }

    /**
     * @return array
     */
    public function get()
    {
        $st = $this->pdo->query("SELECT 
            posts.id,
            posts.title,
            posts.content,
            posts.category_id,
            posts.date,
            categories.name as category_name
             FROM posts INNER JOIN categories 
        ON posts.category_id = categories.id;");


        try {
            $posts = $st->fetchAll();

        } catch (PDOException $e) {

            exit('取得失敗' . $e->getMessage());
        }

        return $posts;
    }

    /**
     * @param $title
     * @param $content
     * @param $categoryId
     */
    public function add($title, $content, $categoryId)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts (title, content, category_id) VALUES (:title, :content, :category_id)");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        $stmt->bindValue(':category_id', $categoryId, PDO::PARAM_INT);

        try {
            $stmt->execute();

        } catch (PDOException $e) {

            exit('登録失敗' . $e->getMessage());
        }
    }

}