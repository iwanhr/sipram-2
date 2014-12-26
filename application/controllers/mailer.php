<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer extends CI_Controller {
    private $emailLib;

    function __construct() {
        parent::__construct();
        $this->load->database();
        
        $this->emailLib = new PyramidLib\Common\Mailer;
        $this->emailLib->prepare($this->db);
    }

	public function sendAllEmail($limit =100, $debug = false)
	{
        $dataEmail = $this->emailLib->getEmails($limit); 
        
        echo "<pre>";
        var_dump($dataEmail);
        echo "</pre>";

        /*if(!empty($emails)){
            $config = $this->_mail_win();
            $this->load->library('email', $config);
            
            foreach($emails as $row){
                $this->email->set_newline("\r\n");
                $this->email->from($row->mailer_from, 'Cipika Store');
                $this->email->to($row->mailer_to);
                
                if($row->mailer_cc!=''){
                    $this->email->cc($row->mailer_cc);
                }
                
                if($row->mailer_bcc!=''){
                    $this->email->bcc($row->mailer_bcc);
                }
                
                $this->email->subject($row->mailer_subject);
                $this->email->message($row->mailer_message);
                $send = $this->email->send();
                
                $status = (!$send)?'not sent':'sent';                
                $Mailer::update($row->idmailer,array('mailer_status' => $status,'mailer_sent' => date('Y-m-d H:i:s')));                
                
                if($status!='sent'){
                    log_message('mailer error', $this->email->print_debugger());
                }
                
                if($debug){
                    print_r($row);
                    echo "<br/>*******************************************<br/>";
                    echo $this->email->print_debugger();
                    echo '<hr/>';
                    
                }
            }
        }*/
	}
    
    public function sendSingleEmail($id_email)
    {
        $dataSingleEmail = $this->emailLib->getSingleEmail($id_email); 
        
        echo "<pre>";
        var_dump($dataSingleEmail);
        echo "</pre>";
    }
}

/* End of file mailer.php */
/* Location: ./application/controllers/mailer.php */
