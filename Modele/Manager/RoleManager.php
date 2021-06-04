<?php

use MiniChatProjet\Classes\DB;

class RoleManager {

    /**
     * Return the queried role.
     * @param int $roleId
     * @return Role|null
     */
    public function getRole(int $roleId): ?Role {
        $role = null;
        $request = DB::connectDb()->prepare("SELECT * FROM role WHERE id=:id");
        $request->bindValue(':id', $roleId);
        if($request->execute() && $data = $request->fetch()) {
            $role = new Role();
            $role->setId($data['id']);
            $role->setRole($data['role']);
        }
        return $role;
    }

    /**
     * Delete provided role id.
     * @param int $roleId
     * @return bool
     */
    public function deleteRole(int $roleId): bool {
        $request = DB::connectDB()->prepare("DELETE FROM role WHERE id=:id");
        $request->bindValue(':id', $roleId);
        if($request->execute()) {
            return true;
        }
        return false;
    }


    /**
     * Add a new role into the database.
     * @param string $role
     * @return Role
     */
    public function addRole(string $role): Role {
        $role = new Role();
        $request = DB::connectDB()->prepare("INSERT INTO role (role) VALUE (:role)");
        $request->bindValue(':role', $role);
        if($request->execute()) {
            $role->setRole($role);
            $role->setId(DB::connectDB()->lastInsertId());
        }
        return $role;
    }
}