<?php

namespace MiniChat\Manager;

use MinichatProjet\Classes\DB;
use MinichatProjet\Entity\user;

class userM {

    /**
     * Return a user based on id.
     * @param int $id
     * @return user
     */
    public function getuser(int $id): user {
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $user_data = $request->fetch();
        $user = new user();
        if ($user_data) {
            $user->setId($user_data['id']);
            $user->setName($user_data['name']);
            $user->setFirstname($user_data['firstname']);
            $user->setPseudo($user_data['pseudo']);
            $user->setEmail($user_data['email']);
            $user->setPassword($user_data['password']);
            $user->setRoleFk($user_data['role_fk']);
        }
        return $user;
    }

    /**
     * Return a users list.
     * @return array
     */
    public function getusers(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new user($data['id'],$data['name'], $data['firstname'], $data['pseudo'], $data['email'],
                    $data['password'], $data['role_fk']);
            }
        }
        return $users;
    }
}
