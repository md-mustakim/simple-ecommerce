<?php
class categoryController extends MY_Controller{
    protected $table = "product";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function do_upload()
    {
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );

        $this->load->library('upload', $config);
        if($this->upload->do_upload())
        {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success',$data);
            return $data;
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('custom_view', $error);
            return $error;
        }

    }

    public function index()
    {
        $response = $this->db->get($this->table)->result();
        $this->echoWithJsonResponse(true, 'Response success', $response);
    }

    public function store()
    {


        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
           /* 'max_height' => "768",
            'max_width' => "1024"*/
        );

        $image_name = "";
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
        {
            $data = array('upload_data' => $this->upload->data());
            $image_name = $data['upload_data']['file_name'];

        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            $image_name = $error;

        }
           $data = [
             'category' => $this->input->post("category"),
             'name' => $this->input->post("name"),
             'details' => $this->input->post("details"),
             'price' => $this->input->post("price"),
             'image' => $image_name,
         ];

           $response = $this->db->insert($this->table, $data);

           if ($response){
               $this->echoWithJsonResponse(true, 'Successfully inserted');
           }else{
               $this->echoWithJsonResponse(false);
           }
    }

    public function show($id)
    {

    }
}