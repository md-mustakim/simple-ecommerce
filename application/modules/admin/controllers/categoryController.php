<?php
class categoryController extends MY_Controller{
    protected $table = "product";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $response = $this->db->get($this->table)->result();
        $this->echoWithJsonResponse(true, 'Response success', $response);
    }

    public function store()
    {
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('details', 'Details', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        if (empty($_FILES['image']['name']))
        {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }

        if($this->form_validation->run() === FALSE){            
            $this->echoWithJsonResponse(false, validation_errors());
        }else{

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
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->echoWithJsonResponse(false, $error);
    
            }     
               
        }
        


    }
    
}