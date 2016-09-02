<?php

require APPPATH . '/core/CI_Controller_Middleware.php';

class Users extends CI_Controller_Middleware {

    protected function middleware()
    {
        return array('auth');
    }

    public function users_get()
    {
        $obj = $this->get();
        print_r($obj);
        $this->response([1=>'Alexandre']);
    }
}
