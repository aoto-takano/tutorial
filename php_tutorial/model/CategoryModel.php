<?php
require_once('Model.php');
/**
 * Class PostModel
 */
class CategoryModel extends Model
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
    public function add($name)
    {
        $stmt = $this->pdo->prepare("INSERT INTO categories (name) VALUES (:name)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            exit('登録失敗' . $e->getMessage());
        }
    }
    /**
     * @return array
     */
    public function getAll()
    {
        $st = $this->pdo->query("SELECT * FROM categories");
        try {
            $categories = $st->fetchAll();
        } catch (PDOException $e) {
            exit('取得失敗' . $e->getMessage());
        }
        return $categories;
    }
    public function delete($id){
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id =id");
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        try {
            $stmt->execute();

        } catch (PDOException $e) {

            exit('削除失敗' . $e->getMessage());
        }
    }
    public function test($id){
        $stmt = $this->pdo->prepare("DELETE FROM categories WHERE id = id");
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        try {
            $stmt->execute();

        } catch (PDOException $e) {

            exit('削除失敗' . $e->getMessage());
        }
    }

}