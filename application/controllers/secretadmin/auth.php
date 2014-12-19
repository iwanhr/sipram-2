<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

    public function index()
    {
    	redirect(base_url('secretadmin/auth/login'));
    }

    public function login() {
    	$this->load->library('form_validation');
        $data['error'] = FALSE;

        $data['title'] = "Dashboard Admin Page";
        $data['title_page'] = "Login";

        $this->form_validation->set_rules('username', 'Username', 'xss_clean|required');
        $this->form_validation->set_rules('password', 'Password', 'xss_clean|required');

        if ($this->form_validation->run($this) == FALSE) {
            //#2 Display Error Message
            $data['error'] = validation_errors();
        } else {
            $username = $this->input->post("username");
            $password = $this->input->post('password');

            $authLib = new \PyramidLib\Helper\Authentication();

            $user = $this->user_m->loginAdmin($username, $authLib->encrypt($password));

            if ($user) {
                $dataUser = $this->user_m->getDataUser($username);
                var_dump($dataUser);
            	// $checkSession = new \PyramidLib\Common\SessionAdapter();
            	// $out = $checkSession->checkSession(SESSION_NAME_ADMIN, true, 'secretadmin/dashboard', 'admin/login');
            }
            else{
                $data['error'] = "Check your Username & Password";
            }
        }
    	$this->load->view('admin/login_v', $data);
    }

    public function logout() {
    	// $checkSession = new \PyramidLib\Common\SessionAdapter();
        // $out = $checkSession->checkSession(SESSION_NAME_ADMIN, false, 'secretadmin/dashboard', 'secretadmin/auth/login');
        // if ($out) {
        	// $checkSession->deleteSession(SESSION_NAME_ADMIN, true, 'secretadmin/auth/login');
        // }
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/secretadmin/auth.php */