<?php
    class Register extends CI_Controller{


        public function registerUser(){

            $this->form_validation->set_rules('firstname', 'First name', 'required');
            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            $this->form_validation->set_rules('username', 'User name', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('passwordConfirm', 'Password Confirmation','required|matches[password]');
            $this->form_validation->set_rules('email', 'Email address', 'required|valid_email|is_unique[users.email]');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('registration_form');  
            }
            else
            {    
                $this->load->model('User_model');
                $response = $this->User_model->insertUserData();

                if($response){
                    $this->session->set_flashdata('msg','Registration Successful.. Now Login');
                    redirect('Home/login');
                }
                else{
                    $this->session->set_flashdata('msg','Something went wrong! Try again.');
                    redirect('Home/register');
                }
            }
        }


        public function updateUser(){

            $this->form_validation->set_rules('firstname', 'First name', 'required');
            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            // $this->form_validation->set_rules('username', 'User name', 'required|is_unique[users.username]');
            // $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
            // $this->form_validation->set_rules('passwordConfirm', 'Password Confirmation','required|matches[password]');
            $this->form_validation->set_rules('email', 'Email address', 'required|valid_email');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('Admin/UpdateProfile');  
            }
            else
            {    
                $this->load->model('User_model');
                $response = $this->User_model->updateUserData();

                if($response){
                    $this->session->set_flashdata('msg','Update Successful...');
                    redirect('Admin');
                }
                else{
                    $this->session->set_flashdata('msg','Something went wrong! Try again.');
                    redirect('Admin/UpdateProfile');
                }
            }
        }

    }
?>