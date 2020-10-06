<?php

class Add extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    public function index(){
        $this->load->view('Admin/Addpost',array('error'=>''));

    }

    public function do_upload(){

        $this->form_validation->set_rules('title', 'Title', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('Admin/Addpost');  
        }
        else{

        $config['upload_path'] = "./images/";
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('userfile')){
            $error = array('error'=>$this->upload->display_errors('<p>','</p>'));
            $this->load->view('Admin/Addpost',$error);
        }
        else{
            $this->load->model('Add_model');
            $id = $this->session->userdata('userid');
            
            $data = array('upload_data' =>$this->upload->data());


            $image_path = $this->upload->data('file_name');
            
            $this->Add_model->insertPostData($id,$image_path);
            redirect('Admin/index');
            //$this->load->view('Admin/dashboard');
        }
    }
    }

    public function Change($id){

        $this->form_validation->set_rules('title', 'Title', 'required');
        
        
        
        if ($this->form_validation->run() )
        {
            $data = $this->input->post();
            $today = date("y/m/d");
            $data['date_created'] = $today;
            unset($data['submit']);
            $this->load->model('Add_model');
            if($this->Add_model->updatePostData($data,$id)){
                $this->session->set_flashdata('msg','Post Updated!');
            }
            else{
                $this->session->set_flashdata('msg','Update Failed!');
            }
            return redirect('Admin/index'); 
        }
        else{
            redirect('Admin/index');
        }
        
    
    }



        
}

?>