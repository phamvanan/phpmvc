<?php
session_start();
$controllername = ($_GET['controller'] ?? 'demo') . 'controller';
$action = $_GET['action'] ?? 'index';
include 'system/autoload.php';
if (class_exists($controllername)) {
    $controller = new $controllername();
    // //check method co k
    // xem($controller);exit;
    if (method_exists($controller, $action)) {
        //them check login
        $controller->$action();
    }
} else {
    $controller = new  defaultcontroller();
    $controller->$action();
}
