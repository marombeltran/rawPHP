<?php

// We want errors to be shown when using it from the CLI.
error_reporting(-1);
ini_set('display_errors', '1');

session_start();

require_once 'models/position.model.php';

$method = ($_GET ? $_GET : $_POST);

// echo '<pre>';
// print_r($method);
// die;

if (isset($method['action'])) {
    $action = $method['action'];
    $position = new Positions();
    switch ($action) {
        case 'add':
            // $position->add($method);
            break;
        case 'edit':
            // $position->edit($method);
            print_r($method);
            break;
        case 'delete':
            $position->delete($method);
            break;
    }
}
