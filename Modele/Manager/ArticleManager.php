<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/Classes/DB.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Modele/Entity/Article.php';


use MinichatProjet\Classes\DB;
use MinichatProjet\Entity\article;

class ArticleManager {

    /**
     * Add a new Article.
     * @param $title
     * @param $content
     * @param $user_fk
     * @return bool
     */
    public function addArticle($title, $content, $user_fk): bool {
        $request = DB::connectDB()->prepare("INSERT INTO article (title, content, user_fk)
                                                         VALUES ( :title, :content, :user_fk)");
        $request->bindValue(':title', DB::cleanupData($title));
        $request->bindValue(':content', DB::cleanupData($content, false));
        $request->bindValue(':user_fk', $user_fk);


        return $request->execute() && DB::connectDB()->lastInsertId() > 0;
    }

    /**
     * Update an article from article table.
     * @param int $id
     * @param string $title
     * @param string $content
     * @return bool
     */
    public function updateArticle(int $id, string $title, string $content): bool {
        $request = DB::connectDB()->prepare("
            UPDATE article SET 
                title = :title,
                content = :content
            WHERE id=:id
        ");

        $request->bindValue(':title', DB::cleanupData($title));
        $request->bindValue(':content', DB::cleanupData($content, false));
        $request->bindValue(':id', $id);
        return $request->execute();
    }

    /**
     * Delete an article from article table.
     * @param int $articleId
     * @return bool
     */
    public function deleteArticle(int $articleId): bool{
        $request = DB::connectDB()->prepare("DELETE FROM article WHERE id=:id");
        $request->bindValue(':id', $articleId);
        return $request->execute();
    }

    /**
     * Return an article based on ID.
     * @param int $id
     * @return article|null
     */
    public function getArticle(int $id): ?Article {
        $article = null;
        $request = DB::connectDB()->prepare("SELECT * FROM article WHERE id=:id");
        $request->bindValue(':id', $id);
        if($request->execute() && $data = $request->fetch()) {
            $article = new Article($data['title'], $data['content'], $data['user_fk'], $data['id']);
        }
        return $article;
    }

    /**
     * Return all articles from newest to oldest.
     * @param null $limit
     * @return array
     */
    public function getAllArticles($limit=null): array {
        if(is_null($limit)) {
            $clause = '';
        } else {
            $clause = " LIMIT $limit";
        }
        $allArticles = [];
        $request = DB::connectDB()->prepare("SELECT * FROM article ORDER BY id DESC" . $clause);
        if($request->execute() && $articles = $request->fetchAll(PDO::FETCH_ASSOC)) {
            foreach ($articles as $ar) {
                $allArticles[] = new Article($ar['title'], $ar['content'], $ar['user_fk'], $ar['id']);
            }
        }

        return $allArticles;
    }

}