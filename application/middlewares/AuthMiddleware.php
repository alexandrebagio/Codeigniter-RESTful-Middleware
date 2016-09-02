<?php

class AuthMiddleware
{
    protected $controller;
    protected $ci;
    public $roles = array();
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }

    public function run() {
        $profile = $this->ci->get('profile');

        if (empty($profile)) {
            show_error('Erro de autenticação!');
        }
        $this->roles = array('somehting', 'view', 'edit');
    }
}
