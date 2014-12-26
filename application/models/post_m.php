<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_m extends CI_Model {

	public $variable;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('date');
        $this->load->database();
	}

	function get_all_post($limit, $sortBy, $sortKey) {
		$sql = "select p.*, u.username from tbl_post p left join tbl_user u on u.id_user = p.creator
                 order by p.". $sortBy." ". $sortKey . " limit 0, " . (int) $limit;
    
        $query = $this->db->query($sql);
        $post = $query->result_object();
        return $post;
	}

}

/* End of file  */
/* Location: ./application/models/ */
