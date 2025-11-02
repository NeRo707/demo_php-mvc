<?php
namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends Controller {
    public function index() {
        $tasks = TaskModel::getAll();
        $this->render('tasks/index', ['tasks' => $tasks]);
    }
    
    public function show() {
        $id = $_GET['id'] ?? null;
        $task = TaskModel::getById($id);
        
        if ($task) {
            $this->render('tasks/show', ['task' => $task]);
        } else {
            http_response_code(404);
            echo "Task not found";
        }
    }
    
    public function api() {
        $tasks = TaskModel::getAll();
        $this->json($tasks);
    }
}
