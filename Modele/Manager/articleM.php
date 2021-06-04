<?php

namespace MiniChat\Manager;

require_once $_SERVER["DOCUMENT_ROOT"] . '/Classes/DB.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Modele/Entity/article.php';

use MinichatProjet\Classes\DB;
use MinichatProjet\Entity\article;

class articleM {


    public function addArticle($title, $content, $user_fk) {
        $request = DB::connectDB()->prepare("INSERT INTO article (title, content, user_fk)
                                                         VALUES ( ?, ?, ?)");
        $request->bindValue(':title',$title->getTitle());
        $request->bindValue(':content',$content->getContent());
        $request->bindValue(':user_fk',$user_fk->getUser_fk());
        $request->execute([$title, $content, $user_fk]);
    }

}