<?php

namespace PyramidLib\Common;

class Mailer {

    private $databaseLib;
    private $emailTabel = 'mailer';

    public function prepare($databaseLib)
    {
        $this->databaseLib = $databaseLib;
    }

    public function saveEmail ($data = array()) {
        $insertEmail = array('idmailer'          => null,
                        'mailer_module'     => (isset($data['module']))?$data['module']:'',
                        'mailer_from'       => (isset($data['from']))?$data['from']:'',
                        'mailer_to'         => (isset($data['to']))?$data['to']:'',
                        'mailer_cc'         => (isset($data['cc']))?$data['cc']:'',
                        'mailer_bcc'        => (isset($data['bcc']))?$data['bcc']:'',
                        'mailer_subject'    => (isset($data['subject']))?$data['subject']:'',
                        'mailer_message'    => (isset($data['message']))?$data['message']:'',
                        'mailer_status'     => 'new',
                        'mailer_created'    => (isset($data['created']))?$data['created']:date('Y-m-d H:i:s')
                        );
        $this->databaseLib->insert('mailer',$insert); 
        return $this->databaseLib->insert_id();
    }

    public function getSingleEmail($id_email) {
        $now = date('Y-m-d H:i:s');
        $sql = "select * from " . $this->emailTabel . " where idmailer = " . (int) $id_email;
        
        $query = $this->databaseLib->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result(); 
        }
    }

    public function getEmails($limit = 10, $debug = false) {
        $now = date('Y-m-d H:i:s');
        $sql = "select * from " . $this->emailTabel . " where mailer_status='new' and mailer_created < '$now' order by mailer_created asc limit 0, $limit;";
        
        $query = $this->databaseLib->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result(); 
        }
    }

}
