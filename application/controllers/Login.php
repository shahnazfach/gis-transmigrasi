<?php

class Login extends CI_Controller {

    public function index()
    {
        
        $valid=$this->form_validation;
        $valid->set_rules('username','Username','required',array('required' => '%s Harus Diisi' ));
        $valid->set_rules('password','Password','required',array('required' => '%s Harus Diisi' ));

        if ($valid->run()) {
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $this->user_login->login($username,$password);

        }
		$data = array(
						'title' => 'Login',
						'isi'	=>'v_login'
						);
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function logout()
    {
        $this->user_login->logout();
	}
	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
