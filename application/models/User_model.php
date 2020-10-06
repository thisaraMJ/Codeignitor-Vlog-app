 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function insertUserData(){
        $data = array(
            
                'fname' => $this->input->post('firstname',TRUE),
                'lname' => $this->input->post('lastname',TRUE),
                'username' => $this->input->post('username',TRUE),
                'email' => $this->input->post('email',TRUE),
                'password' => sha1($this->input->post('password',TRUE))

        );

        return $this->db->insert('users',$data);
    }

    public function updateUserData(){
        
        $username = $this->session->userdata('username');
        
        $this->db->set('fname',$this->input->post('firstname'));
        $this->db->set('lname',$this->input->post('lastname'));
        $this->db->set('email',$this->input->post('email'));
        $this->db->where('username',$username);
        return $this->db->update('users');

    }

    public function setLogin(){
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $respond = $this->db->get('users');

        if($respond->num_rows()==1){
            return $respond->row(0);
        }
        else{
            return false;
        }


    }
}

?>

