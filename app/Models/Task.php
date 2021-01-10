<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "tasks";


    public function saveNew($params)
    {
        $this->name = $params['name'];
        $this->status = $params['status'];

        $this->save();

        return $this;
    }

    public function updateItem($id, $params)
    {
        $task = $this->find($id);

        if(isset($params['name'])) {
            $task->name = $params['name'];
            return $task->save();
        }

        if(isset($params['status'])) {
            $task->status = (int)$params['status'];
            return $task->save();
        }
    }

    public function clearCompleted()
    {
        return $this->where('status', '1')->delete();
    }
}
