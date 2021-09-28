<?php

namespace MVC\Models;

use MVC\Config\Database;
use MVC\Core\Model;
use PDO;

class TaskModel extends Model
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected string $created_at;
    protected string $updated_at;

    public function get()
    {
        $array = [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
        return $array;
    }
    public function set($id, $title, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }
}
