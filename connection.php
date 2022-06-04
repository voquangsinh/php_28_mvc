<?php
class DB
{
    private static $instance = NULl;

    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=127.0.0.1:13306;dbname=less2', 'root', 'root@secret123');
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}