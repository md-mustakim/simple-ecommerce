<?php

class errorController extends MY_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->module('web');
        
    }

    public function index(Type $var = null)
    {
        $viewPath = "home/notFound";
        $jsPath = "assets\js\custom.js";
        $this->web->web->index($viewPath, ['product' => '']);
    }
    
}