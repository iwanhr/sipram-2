<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {
    private $mySession;

	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');

        $session = new \PyramidLib\Common\SessionAdapter();
        $this->mySession = $session->inSession(SESSION_NAME_ADMIN, 'secretadmin/auth/login');
    }

    public function index() {
        $data = array();
        $data['content'] = "admin/member_v";
        $data['session']  = $this->mySession;
        $data['title']  = "Dashboard | Member";
        $data['title_page']  = "Member";
        $data['label_dashboard']  = "Admin Panel";
        $data['url_home'] = base_url('secretadmin');
        $data['current_url_breadcrumb'] = current_url();

        $this->load->view('admin/template_v', $data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/secretadmin/dashboard.php */