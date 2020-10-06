<?php

class Admin extends CI_Controller{

    public function index(){

        $this->load->model('Queries');
        $posts = $this->Queries->getPosts();
        if($posts){
            $this->load->view('Admin/dashboard',['posts'=>$posts]);
        }else{
            $this->session->set_flashdata('msg','No any Post Yet. Add One!');
            redirect('Add/index');
        }
        

    }

    public function addPost(){
        $this->load->view('Admin/Addpost',array('error'=>''));

    }
    
    public function viewPost(){          // to view users own posts  
        $this->load->model('Queries');
        
        $posts = $this->Queries->myPosts();
        
        if($posts){
            $this->load->view('Admin/Viewpost',['posts'=>$posts]);
        }else{
            $this->session->set_flashdata('msg','No any Post Yet. Add One!');
            redirect('Add/index');
        }
    }


    public function viewSingle($id){     // for full view of a single post
        $this->load->model('Queries');
        $post = $this->Queries->getSinglePost($id);
        $this->load->view('Admin/Viewsingle',['post'=>$post]);

    }



    public function update($id)
    {   
        $this->load->model('Queries');
        $post = $this->Queries->getSinglePost($id);
        //print_r($post);
        $this->load->view('Admin/Updatepost',['post'=>$post]);
    }


    public function delete($id)
    {
        $this->load->model('Queries');
        $post = $this->Queries->deletePost($id);

        return redirect('Admin/viewPost');
    }

    public function profileForm()
    {
        $this->load->model('Queries');
        $result = $this->Queries->getUserdata();
        if($result){
            $this->load->view('Admin/Profile',['result'=>$result]);
        }
    }

}

?>