<?php

namespace App\Controllers;

use App\Models\TodoModel;

class TodoController extends BaseController
{
    public function index()
    {
        $model = new TodoModel();
        $data['todos'] = $model->getTodoList();

        return view('todo', $data);
    }

    public function addTodo()
    {
        $model = new TodoModel();

        if ($this->request->getMethod() === 'post') {
            $nama = $this->request->getPost('nama');
            $data = [
                'kegiatan' => $nama,
                'status' => 'Aktif'
            ];
            $model->addTodoList($data);
        }

        return redirect()->to(site_url('todo'));
    }

    public function markAsDone($id)
    {
        $model = new TodoModel();
        $model->updateTodoStatus($id);

        return redirect()->to(site_url('todo'));
    }

    public function delete($id)
    {
        $model = new TodoModel();
        $model->deleteTodoList($id);

        return redirect()->to(site_url('todo'));
    }
}