<?php

namespace App\Repositories\Concrete;

use App\Repositories\Contracts\TodoInterface;
use App\Todo;

class TodoRepository implements TodoInterface
{

    public function all()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return $todos;
    }

    public function create($data)
    {
        $todo = new Todo();
        $todo->completed = $data->completed;
        $todo->label = $data->label;
        $todo->save();
        $todos = $this->all();
        return $todos;
    }

    public function delete($id)
    {
        $todo = Todo::where('id', $id)->first();
        if ($todo->delete()) {
            return $this->all();
        }
        return null;
    }

    public function update($data, $id)
    {
        $todo = Todo::where('id', $id)->first();
        if($todo->update(['label' => $data->label])) {
            return $this->all();
        };
        return null;
    }
}