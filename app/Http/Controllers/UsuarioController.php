<?php

namespace App\Http\Controllers;

class UsuarioController {

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createUser($username, $password, $email)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (username, password, email) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 'sss', $username, $hashedPassword, $email);
        
        return mysqli_stmt_execute($stmt);
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            return true;
        } else {
            return false; 
        }
    }

    public function logout()
    {
        session_start();
        session_unset(); 
        session_destroy(); 
    }
}
