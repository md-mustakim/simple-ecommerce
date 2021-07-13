<?php

class home extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        $this->load->module("web");
    }

    public function index()
    {
        $productList = $this->db->get('product')->result();

        $newProductList = array();
        foreach ($productList as $item)
        {
            $itemArray = (array)$item;
            $itemArray['slug'] = $this->slugify($item->name);
            $makeObjectItem = (array)$itemArray;
            array_push($newProductList,$makeObjectItem);
        }

        $viewPath = "home/electronicsForHomePage";
        $this->web->web->index($viewPath, (object)$newProductList);
    }


    public function show($id, $slug) //accept id and SEO friendly url
    {
        $result = $this->db->where(['id' => $id])->get('product')->row();

        $viewPath = "home/showProduct";
        $jsPath = "assets\js\custom.js";
        $this->web->web->index($viewPath, ['product' => $result]);


    }

    public function cart()
    {
        $viewPath = "home/viewCart";
        $this->web->web->index($viewPath, ['product' => '']);
    }


    public function checkout()
    {
        $viewPath = "home/checkout";
        $this->web->web->index($viewPath);
    }



}