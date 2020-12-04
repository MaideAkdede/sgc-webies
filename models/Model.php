<?php

abstract class Model
{
    static public function fetch($sql, $attributes = [])
    {
        //$query = $this->connexion();
    }

    static public function fetchAll($sql, $attributes = [])
    {
        //PDO connexion avec base de données
        $pdo = static::connexion();
        //préparer requete sql pour qu'elle puisse être utilisé
        $query = $pdo->prepare($sql);
        // excécuter
        $query->execute($attributes);
        //afficher résultat
        return $query->fetchAll();
    }

    static protected function connexion()
    {
        // CONFIGURER PDO
        $charset = 'utf8mb4';
        $dsn = 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DBNAME . ';charset=' . $charset;

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, MYSQL_USER, MYSQL_PASSWORD, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $pdo;
    }
}