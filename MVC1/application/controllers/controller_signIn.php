<?php

class Controller_signIn extends Controller
{
    function action_index()
    {
        $this->view->generate('signIn_view.php', 'template_view.php');
    }
}