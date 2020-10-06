<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Model{

    public function insertPostData($id,$image_path){

        $data = array(
            
                'userID' => $id,
                'title' => $this->input->post('title',TRUE),
                'text' => $this->input->post('text',TRUE),
                'image_name' => $image_path,
                'date' => date("Y/m/d"),
                'username' => $this->session->userdata('username')
        );

        return $this->db->insert('addpost',$data);
    }

    public function updatePostData($data,$id){  //not used

        $data = array(
                'userID' => $id,
                'title' => $this->input->post('title',TRUE),
                'text' => $this->input->post('text',TRUE),
                //'image_name' => $image_path,
                'date' => date("Y/m/d"),
                'username' => $this->session->userdata('username')
        );

        $this->db->set('title',$this->input->post('title'));
        $this->db->set('text',$this->input->post('text'));
        $this->db->set('date',date("Y/m/d"));
        $this->db->where('id',$id);
        return $this->db->update('addpost');
       // return $this->db->update('addpost',$data);
    }

    
}

?>