<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Queries extends CI_Model{

    public function getPosts(){

        $respond = $this->db->get('addpost');   //addpost --> table name

        if($respond->num_rows() > 0){
            return $respond->result();
        }
        else{
            return false;
        }
    }

    public function myPosts(){

        $username = $this->session->userdata('username');

        $this->db->where('username',$username);

        $query = $this->db->get('addpost');

        if($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return false;
        }
    }
    
    public function getSinglePost($id){

        $query = $this->db->get_where('addpost',array('id'=>$id));

        if($query->num_rows()==1){
            return $query->row();
        }
        else{
            return false;
        }
    }

    public function updatePost($data,$id){

        return $this->db->where('id',$id)->update('addpost','data');

    }

    public function deletePost($id){

        return $this->db->delete('addpost',['id'=>$id]);

    }

    // public function getUserdata(){

    //     $query = $this->db->get_where('users',array('username'=>$this->session->userdata('username')));

    //     if($query->num_rows()==1){
    //         return $query->row();
    //     }
    //     else{
    //         return false;
    //     }

    // }
}

?>

