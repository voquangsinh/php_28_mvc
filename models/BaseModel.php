<?php

class BaseModel {

    public function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM {$this->table}");
        
        foreach ($req->fetchAll() as $item) {
            $object = new $this->model();
            foreach ($this->fillables as $fillable) {
                $object->$fillable = $item[$fillable];
            }
            $list[] = $object;
        }

        return $list;
    }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Post($item['id'], $item['title'], $item['content']);
    }
    return null;
  }
}