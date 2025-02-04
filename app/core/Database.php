<?php
namespace App\Core;
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database
{
    private $pdo;
    Private static $instance = null;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

        try {
            $this->pdo = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            echo "Connexion réussie à la base de données PostgreSQL via PDO.";
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->getPdo();
    }
    public function getPdo()
    {
        return $this->pdo;
    }
}

$db = new Database();
