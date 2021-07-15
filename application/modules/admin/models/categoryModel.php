<?php
class categoryModel extends CI_Model{
    protected $table = "product";
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function all(){
        $allRecards = $this->db->get($this->table)->result();
        return $allRecards;
    }

    function order(){
        return $this->db->from($this->table)->where('id >', 0)->order_by('id', 'DESC')->get()->result();        
    }

    public function insert(array $data){
        return $this->db->insert($this->table, $data);
    }

    public function show(int $id)
    {
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    public function update(int $id, array $data){
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete(int $id){
        return $this->db->delete($this->table, ['id' => $id]);
    }
    
}