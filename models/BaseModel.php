<?php

class BaseModel
{

    public function getTable()
    {
        return $this->table ?? strtolower(static::class) . 's';
    }

    public function getFillables()
    {
        return $this->fillables ?? strtolower(static::class);
    }

    /**
     * Get all records of model
     *
     * @return array
     */
    public static function all()
    {
        $class =  static::class;
        $ob = new $class();
        $db = DB::getInstance();
        try {
            $req = $db->query("SELECT * FROM {$ob->getTable()}");
        
            return $req->fetchAll(PDO::FETCH_CLASS, static::class);
        } catch (\Throwable $th) {
            return false;
        }
        
    }

    /**
     * Get all records of model
     *
     * @return array
     */
    public static function find($id = 1)
    {
        $class =  static::class;
        $ob = new $class();
        $db = DB::getInstance();
        try {
            $req = $db->query("SELECT * FROM {$ob->getTable()} WHERE id = {$id}");

            return $req->fetch(PDO::FETCH_CLASS, static::class);
        } catch (\Throwable $th) {
            return false;
        }
        
    }

    /**
     * Get all records of model
     *
     * @return array
     */
    public static function create($data)
    {
        $column = implode(',', array_keys($data));
        $values = array_values($data);
        $values = '';
        foreach (array_values($data) as $value) {
            $values .= $values ? "," : "";
            $values .= "'$value'";
        }

        $class =  static::class;
        $ob = new $class();
        $db = DB::getInstance();

        try {
            $db->query("INSERT INTO {$ob->getTable()} ({$column}) values ({$values});");
            return true;
        } catch (\Throwable $th) {
           return false;
        }
    }

    /**
     * Get all records of model
     *
     * @return array
     */
    public static function update($data, $condition = '')
    {
        $qr = '';
        foreach ($data as $column => $value) {
          $qr .= $qr ? "," : "";
          $qr .= "$column = $value,";
        }
  
        $class =  static::class;
        $ob = new $class();
        $db = DB::getInstance();
        $sql = "UPDATE {$ob->getTable()} SET {$qr}";

        if ($condition) {
          $sql .= " WHERE {$condition};";
        }
        try {
            $db->query($sql);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
