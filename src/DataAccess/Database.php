<?php

namespace IoFarm\DataAccess;

/**
 * A singleton class.
 */
class Database
{
    private \PDO $pdo;
    private static ?Database $instance = null; // The ? means it can be null,
    // so in this case $instance can contain null or a valid database object.

    private function __construct()
    {
        $host = 'db';
        $db = 'iofarm2';
        $user = 'root';
        $pass = 'password';

        $dsn = "mysql:host=$host;dbname=$db";

        $options = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_EMULATE_PREPARES   => false // This line is unnecessary because it's false by default.
        ];

        try {
            $this->pdo = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $exception) {
            throw new \PDOException($exception->getMessage(), (int)$exception->getCode());
        }
    }

    public static function getInstance(): Database
    {
        if (!self::$instance)
        {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }

    public function fetch(string $sql, array $values = []): array
    {
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($values);

        return $stmt->fetch();
    }

    public function fetchAll(string $sql, array $values = []): array
    {
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($values);

        return $stmt->fetchAll();
    }
}
