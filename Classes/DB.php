<?php
namespace MiniChatProjet\Classes;

use PDO;
use PDOException;
class DB {

    private string $server = 'localhost';
    private string $db = 'projet_perso';
    private string $user = 'root';
    private string $pwd = '';

    private static ?PDO $database = null;

    /**
     * Db Static constructor.
     */
    public function __construct() {
        try {
            self::$database = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user, $this->pwd);
            self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Return PDO instance.
     */
    public static function connectDB(): ?PDO {
        if (null === self::$database) {
            new self();
        }
        return self::$database;
    }

    /**
     * Cleanup data before database insert.
     * @param string $data
     * @param bool $tags
     * @return string
     */
    public static function cleanupData(string $data, $tags=true): string {
        $string = addslashes($data);
        if($tags) {
            $string = strip_tags($string);
        }
        return $string;
    }
}