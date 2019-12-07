<?php

class Controller_User extends Controller
{
    function action_signUp()
    {
        if (isset($_POST['login'])) {
            $login = trim($_POST['login']);
        }
        if (isset($_POST['password'])) {
            $password = trim($_POST['password']);
        }
        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
        }

        $model = new Model_signUp();

        $this->view->generate('signUp_view.php', 'template_view.php');
    }
}