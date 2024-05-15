<?php
require_once '../app/core/Database.php';

class User {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Register User
    public function register($email, $password){
        // Hash the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Check if the user already exists
        if ($this->findUserByEmail($email)) {
            return false; // User already exists
        }

        // Insert the user into the database
        $this->db->query('INSERT INTO users (email, password) VALUES (:email, :password)');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashed_password);

        // Execute the query
        if ($this->db->execute()) {
            return true; // User registered successfully
        } else {
            return false; // Registration failed
        }
    }

    // Find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
    
        $row = $this->db->single();
    
        // Check if user exists
        return ($row) ? true : false;
    }
    
}
?>
