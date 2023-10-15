<?php
require_once '../models/user_model.php'; // Adjust the path to the user_model.php file
require_once 'user_controller.php'; // Adjust the path to the user_controller.php file


// Create a database connection (assuming you have already established a connection)
$db = new mysqli('localhost', 'root', '', 'brock', 3306);

$model = new UserModel($db);
$controller = new UserController($model);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $mob_no = $_POST['mob_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $controller->addUser($firstname, $lastname, $username, $mob_no, $email, $password);
}
?>
