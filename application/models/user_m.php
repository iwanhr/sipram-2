<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

	public $variable;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('date');
        $this->load->database();
	}

	function loginAdmin($email='', $password='', $remember=''){
		$pass=md5($password);
		$sql="select * from tbl_user
            where (username = '" . $this->db->escape_str($email) . "' or email = '" . $this->db->escape_str($email) . "') and activate = 1 AND id_status in (1,2,3,4) AND deleted != 1";

		$query=$this->db->query($sql);
		if ($query->num_rows() === 1){
			$user = $query->row();

            if ($user) {
                if ($user->password === $password) {
                    $sessionLib = new \PyramidLib\Common\SessionAdapter();
                    $sessionLib->saveSession($user, SESSION_NAME_ADMIN);

                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
		} else {
			return false;
		}
	}

	function getDataUser($email) 
	{
		$sql="select id_user, username,email, phone, id_status, id_level from tbl_user
            where (username = '" . $this->db->escape_str($email) . "' or email = '" . $this->db->escape_str($email) . "')";

		$query=$this->db->query($sql);
		$user = $query->row_object();
		return $user;
	}

}

/* End of file  */
/* Location: ./application/models/ */
