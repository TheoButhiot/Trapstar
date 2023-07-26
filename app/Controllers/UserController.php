<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ConnectionModel;


class UserController extends ConnectionModel
{

    public function formSignup()
    {
        $userModel = new UserModel();

        if(!empty($_POST['name']) && isset($_POST['name']) && !empty($_POST['email']) &&
        isset($_POST['email']) && !empty($_POST['password']) && isset($_POST['password']))
        {
            $name = $_POST['name'];
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
            $email = $_POST['email'];

            $userModel->createUser($name, $password, $email);

            header('Location: /');

        }else{
            header('Location: /form_signup');
            echo 'Merci de remplir les champs';
        }

    }

    public function formLogin()
    {
        $userModel = new UserModel();
        
        if(!empty($_POST['email']) && isset($_POST['email']) && !empty($_POST['password']) && isset($_POST['password']))
        {
            $password = $_POST['password'];
            $email = $_POST['email'];

            $user = $userModel-> getUser($email);
        }else 
        {
            header('Location: /');
            echo'Met tes bon identifiants imbécile';
        }

        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $email;
            header('Location: /home');
        }else 
        {
            echo'Tu t\'es trompé d\'identifiants';
        }      
    }
    
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /');
    }


}
