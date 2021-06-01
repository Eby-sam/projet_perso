<?php
namespace MiniChatProjet\Classes;

use PDO;
use PDOException;
class DB {

    private string $server = 'starcomputer.fr';
    private string $db = 'u548041276_dbSam';
    private string $user = 'u548041276_sam';
    private string $pwd = 'Naruto190';

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
}