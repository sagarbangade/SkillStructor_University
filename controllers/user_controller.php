<?php
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addUser($firstname, $lastname, $username, $mob_no, $email, $password) {
        // Validate input here if needed
        
        $result = $this->model->insertUser($firstname, $lastname, $username, $mob_no, $email, $password);

        if ($result) {
            // Insertion was successful, you can redirect to a success page
            header("Location: ../index.html");
        } else {
            // Insertion failed, handle the error (e.g., show an error message)
            echo "Error: User registration failed.";
        }
    }
}
?>
