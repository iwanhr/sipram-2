<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events extends CI_Controller {

    private $mySession;
    private $convertData;

    function __construct()
    {
        parent::__construct();
        $this->load->model('events_m');

        $session = new \PyramidLib\Common\SessionAdapter();
        $this->mySession = $session->inSession(SESSION_NAME_ADMIN, 'secretadmin/auth/login');

        $this->convertData = new \PyramidLib\Helper\Convertion();
        $this->pagination = new \PyramidLib\Common\Pagination();
    }

    public function index()
    {
        $data = array();
        $data['content'] = "admin/events_v";
        $data['session'] = $this->mySession;
        $data['title'] = "Dashboard | Events";
        $data['title_page'] = "Events";
        $data['label_dashboard'] = "Admin Panel";
        $data['url_home'] = base_url('secretadmin');
        $data['current_url_breadcrumb'] = current_url();
        $data['convert'] = $this->convertData;

        $dataPerhalaman = 20;

        if (isset($_GET['hal'])) {
            $hal = $_GET['hal'];
        } else {
            $hal = '';
        }
        
        ($hal == '') ? $nohalaman = 1 : $nohalaman = $hal;
        $offset = ($nohalaman - 1) * $dataPerhalaman;
        $off = abs((int) $offset);
        $data['offset'] = $offset;

        $fields = array();

        $data['dataEvents'] = $this->events_m->get_all_events($dataPerhalaman, $off, 'created', 'DESC');
        $jmlData = $this->events_m->get_all_events_count('created', 'DESC');
        $data['paginator'] = $this->events_m->page($jmlData, $dataPerhalaman, $hal);

        $this->load->view('admin/template_v', $data);
    }

    public function new_event()
    {
        $data = array();
        $data['session'] = $this->mySession;
        $data['title'] = "Dashboard | New Events";
        $data['title_page'] = "New Events";
        $data['label_dashboard'] = "Admin Panel";
        $data['url_home'] = base_url('secretadmin');
        $data['url_back'] = base_url('secretadmin/member');
        $data['current_url_breadcrumb'] = current_url();
        $data['listType'] = array(
            array('id' => 1, 'label' => 'Internal'),
            array('id' => 2, 'label' => 'Eksternal'),
            );
        $listProgram = new PyramidLib\Entity\Events\EventType($this->db);
        $data['listProgram'] = $listProgram->getListTypeEvents();
        
        if (isset($_POST['save'])) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('event_name', 'Event Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['error'] = validation_errors();
            } else {
                $data = array(
                    'event_name' => $_POST['event_name'],
                    'event_type' => $_POST['listType'],
                    'event_program' => $_POST['listProgram'],
                    //'event_date_start' => $_POST['dateStart'],
                    //'event_date_end' => $_POST['dateEnd'],
                    'event_description' => $_POST['description'],
                    'event_author' => 'pengurus',
                    'event_status' => 1,
                    'created' => date('Y-m-d H:i:s'),
                    'creator' => 1,
                    'deleted' => 0,
                );
                $dbEvent = new \PyramidLib\Entity\DatabaseModel($this->db);
                $insertDataEvent = $dbEvent->insert('tbl_event', $data);
                
                redirect(base_url("secretadmin/events"));
            }
        }
        
        $data['content'] = "admin/new_events_v";

        $this->load->view('admin/template_v', $data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/secretadmin/dashboard.php */
