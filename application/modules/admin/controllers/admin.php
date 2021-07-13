<?php
class admin extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function index()
    {
        $this->load->view("admin/template", [
            'mainContent' => 'admin/product',
            'data' => null,
            'jsPath' => 'assets\js\custom.js'
        ]);
    }
}