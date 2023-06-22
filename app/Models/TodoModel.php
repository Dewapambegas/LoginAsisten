<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todolist';
    protected $primaryKey = 'idkegiatan';
    protected $allowedFields = ['kegiatan', 'status'];

    public function getTodoList()
    {
        return $this->findAll();
    }

    public function addTodoList($data)
    {
        return $this->insert($data);
    }

    public function updateTodoStatus($id)
    {
        $this->set('status', 'Selesai')->where('idkegiatan', $id)->update();
    }

    public function deleteTodoList($id)
    {
        return $this->where('idkegiatan', $id)->delete();
    }
}