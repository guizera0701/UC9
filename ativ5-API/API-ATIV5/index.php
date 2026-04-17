<?php

header("Content-Type: application/json");

require_once "config/database.php";
require_once "models/Cliente.php";
require_once "controllers/ClienteController.php";

$db = (new Database())->getConnection();
$controller = new ClienteController($db);

$method = $_SERVER['REQUEST_METHOD'];
$data = json_decode(file_get_contents("php://input"));

switch($method) {

    case 'GET':
        $controller->read();
        break;

    case 'POST':
        $controller->create($data);
        break;

    case 'PUT':
        $controller->update($data);
        break;
}