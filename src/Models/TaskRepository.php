<?php

namespace MVC\Models;
use MVC\Models\TaskResourceModel;
class TaskRepository
{ 
    private TaskResourceModel $taskResourceModel;
    public function __construct()
    {
        $this->taskResourceModel = new TaskResourceModel();
    }
    //$model la 1 object
    public function add($model)
    {
       return $this->taskResourceModel->save($model);
    }
    public function get($id)
    {
        return $this->taskResourceModel->get($id);
    }
    public function delete($model)
    {   
        return $this->taskResourceModel->delete($model);
    }
    public function getAll($model)
    {
        return $this->taskResourceModel->getAll($model);
    }
}
