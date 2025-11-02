<?php
namespace App\Models;

class TaskModel {
    private static $tasks = [
        ['id' => 1, 'title' => 'Learn PHP', 'completed' => false],
        ['id' => 2, 'title' => 'Build MVC App', 'completed' => false],
        ['id' => 3, 'title' => 'Master Routing', 'completed' => true]
    ];
    
    public static function getAll() {
        return self::$tasks;
    }
    
    public static function getById($id) {
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }
        return null;
    }
    
    public static function create($title) {
        $id = count(self::$tasks) + 1;
        $task = ['id' => $id, 'title' => $title, 'completed' => false];
        self::$tasks[] = $task;
        return $task;
    }
    
    public static function update($id, $data) {
        foreach (self::$tasks as &$task) {
            if ($task['id'] == $id) {
                $task = array_merge($task, $data);
                return $task;
            }
        }
        return null;
    }
}
