<?php

namespace MVC\Models;
use MVC\Models\SinhvienResourceModel;
class SinhvienRepository
{ 
    private SinhvienResourceModel $sinhvienResourceModel;
    public function __construct()
    {
        $this->sinhvienResourceModel = new SinhvienResourceModel();
    }
    //$model la 1 object
    public function add($model)
    {
       return $this->sinhvienResourceModel->save($model);
    }
    public function get($id)
    {
        return $this->sinhvienResourceModel->get($id);
    }
    public function delete($model)
    {   
        return $this->sinhvienResourceModel->delete($model);
    }
    public function getAll($model)
    {
        return $this->sinhvienResourceModel->getAll($model);
    }
}
