<?php

namespace Core;

abstract class Model
{
    protected static $table = NULL;

    protected $attributes = [];

    public static function getById($id)
    {
        $db = static::dbConnect();

        $table = static::getTableName();

        $sql = "SELECT * FROM $table WHERE id = :id";

        $query = $db->prepare($sql);
        $query->execute(['id' => $id]);

        $query->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        return $query->fetch();
    }

    public static function getAll()
    {
        $db = static::dbConnect();

        $table = static::getTableName();

        $sql = "SELECT * FROM $table";

        $query = $db->prepare($sql);
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        return $query->fetchAll();
    }

    protected static function dbConnect()

    {
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $dsn = "mysql:host=$host;dbname=$dbname";
        $user = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        return new \PDO($dsn, $user, $password);
    }

    protected static function getTableName()
    {
        if(isset(static::$table)) {
            return static::$table; // return the value of the static property $table if is not null (custom table name)
        }
        $singular = strtolower(getClassBasename(get_called_class()));

        switch (substr($singular, -1)) {
            case 'y':
                return substr($singular, 0, -1) . 'ies';
            case 's':
            case '0':
                return $singular . 'es';
            default:
                return $singular . 's';
        }
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }
}
