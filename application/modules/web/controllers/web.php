<?php
class web extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function index($viewPath, $data = [], $jsPath  = '')
    {
        $this->load->view("web", ['viewPath' => $viewPath, 'data' => $data, 'jsPath' => $jsPath]);
    }

}