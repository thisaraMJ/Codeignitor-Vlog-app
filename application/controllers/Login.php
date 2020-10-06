<?php

class Login extends CI_Controller{

    public function userLogin(){
        $this->form_validation->set_rules('username', 'User name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('login_page');  // inside this don't enter controller name, you shoul enter form name
            }
            else
            {    
                $this->load->model('User_model');
                $result = $this->User_model->setLogin();

                if($result){
                    $userdata = array(

                        'userid'  => $result->id,
                        'fname' => $result->fname,
                        'lname' => $result->lname,
                        'username' => $result->username,
                        'email'     => $result->email,
                        'logged_in' => TRUE
                    );
                
                    $this->session->set_userdata($userdata);
                    $this->session->set_flashdata('welcome','Welcome!');
                    redirect('Admin/index');
                }
                else{
                    $this->session->set_flashdata('errmsg','Incorrect Username or Password!');
                    redirect('Home/login');
                }
            }

    }

    public function userLogout(){

        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('logged_in');

        redirect('Home/login');

    }
}

?>