<?php

namespace MVC\Models;

use MVC\Config\Database;
use MVC\Core\Model;
use PDO;

class SinhvienModel extends Model
{
    protected int $id;
    protected string $ten;
    protected string $diachi;
    protected int $tuoi;
    protected bool $gioitinh;

    public function get()
    {   
        $array = [
            "id" => $this->id,
            "ten" => $this->ten, 
            "diachi" => $this->diachi, 
            "tuoi" => $this->tuoi, 
            "gioitinh" => $this->gioitinh,
        ];
        return $array;
    }

    public function set($id,$ten,$diachi,$tuoi,$gioitinh)
    {   
        $this->id = $id;
        $this->ten = $ten;
        $this->diachi = $diachi;
        $this->tuoi = $tuoi;
        $this->gioitinh = $gioitinh;
    }
}
