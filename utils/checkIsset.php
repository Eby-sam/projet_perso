<?php


class checkIsset {

    function issetPostParams(string ...$params): bool {
        foreach ($params as $param){
            if(!isset($_POST[$param])) {
                return false;
            }
        }
        return true;
    }
}

