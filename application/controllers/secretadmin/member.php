<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    private $mySession;
    private $convertData;

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');

        $session = new \PyramidLib\Common\SessionAdapter();
        $this->mySession = $session->inSession(SESSION_NAME_ADMIN, 'secretadmin/auth/login');

        $this->convertData = new \PyramidLib\Helper\Convertion();
        $this->pagination = new \PyramidLib\Common\Pagination();
    }

    public function index()
    {
        $data = array();
        $data['content'] = "admin/member_v";
        $data['session'] = $this->mySession;
        $data['title'] = "Dashboard | Member";
        $data['title_page'] = "Member";
        $data['label_dashboard'] = "Admin Panel";
        $data['url_home'] = base_url('secretadmin');
        $data['current_url_breadcrumb'] = current_url();
        $data['convert'] = $this->convertData;

        $dataPerhalaman = 20;

        $fields = array();

        $data['dataMember'] = $this->user_m->get_all_member($dataPerhalaman, 'date_registered', 'DESC');
        $data['dataAdministrator'] = $this->user_m->get_all_administrator();

        $this->load->view('admin/template_v', $data);
    }

    public function new_member()
    {
        $data = array();
        $data['session'] = $this->mySession;
        $data['title'] = "Dashboard | New Member";
        $data['title_page'] = "New Member";
        $data['label_dashboard'] = "Admin Panel";
        $data['url_home'] = base_url('secretadmin');
        $data['url_back'] = base_url('secretadmin/member');
        $data['current_url_breadcrumb'] = current_url();

        if (isset($_POST['save'])) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'skip');
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]|'
                    . 'max_length[15]|required'
            );
            $this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $data['error'] = validation_errors();
            } else {
                $encryptLib = new \PyramidLib\Helper\Authentication();

                $data = array(
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'username' => $_POST['username'],
                    'password' => $encryptLib->encrypt($_POST['password']),
                    'date_registered' => date('Y-m-d H:i:s'),
                    'id_level' => 5,
                    'id_status' => 2,
                    'activate' => 0,
                    'deleted' => 0,
                );

                $dbMember = new \PyramidLib\Entity\DatabaseModel($this->db);
                $insertDataMember = $dbMember->insert('tbl_user', $data);
                
//                $emailMember = new \PyramidLib\Helper\EmailMember();
//                $emailMember->newRegisterMember();

                redirect(base_url("secretadmin/member"));
            }
        }
        
        $data['content'] = "admin/new_member_v";

        $this->load->view('admin/template_v', $data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/secretadmin/dashboard.php */
