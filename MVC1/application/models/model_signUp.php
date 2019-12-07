<?php
//require_once __DIR__ . '/lib/dbConnection.php';
require_once 'C:\OSPanel\domains\MVC1\lib\dbConnection.php';

class Model_signUp extends Model
{

    public function signUp($login, $password, $email)
    {
        {
            $sql_check = 'SELECT EXISTS(SELECT login FROM users WHERE login = :login)';
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->execute([':login' => $login]);
            if ($stmt_check->fetchColumn()) {
                return false;
            }
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO users(login,password,email) VALUES(:login,:password,:email)';
            $params = ['login' => $login, ':password' => $password, 'email' => $email];
            $stmt = $pdo->prepare($sql);
            return $stmt->execute($params);
        }
    }
}



