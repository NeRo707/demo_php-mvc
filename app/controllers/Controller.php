<?php
namespace App\Controllers;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        include __DIR__ . "/../Views/$view.php";
    }
    
    protected function json($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
