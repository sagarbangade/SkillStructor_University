<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertUser($firstname, $lastname, $username, $mob_no, $email, $password) {
        $sql = "INSERT INTO user (firstname, lastname, username, mob_no, email, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssssss", $firstname, $lastname, $username, $mob_no, $email, $password);
        
        if ($stmt->execute()) {
            return true; // Insertion was successful
        } else {
            return false; // Insertion failed
        }
    }
}
?>
