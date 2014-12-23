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

    public function login()
    {
        $session = new \PyramidLib\Common\SessionAdapter();

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

                $createSession = $session->saveSession($dataUser, SESSION_NAME_ADMIN);

                if ($createSession) {
                    redirect(base_url('secretadmin/dashboard'));
                }
            } else {
                $data['error'] = "Check your Username & Password";
            }
        }
        $this->load->view('admin/login_v', $data);
    }

    public function logout()
    {
        $session = new \PyramidLib\Common\SessionAdapter();
        $getData = $session->inSession(SESSION_NAME_ADMIN, 'secretadmin/auth/login');

        if ($getData) {
            $session->deleteSession(SESSION_NAME_ADMIN);

            $session->inSession(SESSION_NAME_ADMIN, 'secretadmin/auth/login');
        }
    }

}

/* End of file auth.php */
/* Location: ./application/controllers/secretadmin/auth.php */