<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_m extends CI_Model {

	public $variable;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('date');
        $this->load->database();
	}

	function get_all_events($limit, $offset, $sortBy, $sortKey) {
		$sql = "select e.* from tbl_event e left join tbl_user u on e.creator = u.id_user left join tbl_event_type et on et.id_event_type = e.event_type
            order by ". $sortBy." ". $sortKey . " limit " . $offset . ", " . (int) $limit;
        $query = $this->db->query($sql);
        $data = $query->result_object();
        
        foreach($data as $k => $v) {
            $queryType = "select (select event_type_name from tbl_event_type where id_event_type=et.id_parent_type) as event_type_name_parent, et.event_type_name from tbl_event_type et where et.id_event_type = ".$v->event_type.";";
            $queryRespond = $this->db->query($queryType);
            $respond = $queryRespond->row();
            $data[$k]->type = $respond;
        }
        return $data;
	}

    function get_all_events_count($sortBy, $sortKey) {
		$sql = "select e.* from tbl_event e left join tbl_user u on e.creator = u.id_user left join tbl_event_type et on et.id_event_type = e.event_type
            order by ". $sortBy." ". $sortKey;
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        
        return $data;
	}

    
 
    function page($jml='', $perhalaman='' ,$hal=''){
            // jumlah data yang akan ditampilkan per halaman        
        $dataPerhalaman = $perhalaman;
        $showhalaman = 0;
        $nohalaman = 0;
        // apabila $_GET['halaman'] sudah didefinisikan, gunakan nomor halaman tersebut, 
        // sedangkan apabila belum, nomor halamannya 1.
        if($hal==''){
            $nohalaman = 1;
        }else{ 
            $nohalaman = $hal;      
        }
        
        $jumData = $jml;

        // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
        $jumhalaman = ceil($jumData/$dataPerhalaman);
        
        $output = '<ul>';
        // menampilkan link previous
        if ($nohalaman > 1){

            $params = $_GET;
            $params['hal'] = $nohalaman-1;

            $query = http_build_query($params);        
            $output .= '<li><a href="?'.$query.'" data-title="Previous Page">Prev</a></li>';
        } else {        
            $output .= '<li><a href="#" data-title="Previous Page">Prev</a></li>';
        }

        // memunculkan nomor halaman dan linknya
        for($halaman = 1; $halaman <= $jumhalaman; $halaman++)
        {
            $params = $_GET;
            $params['hal'] = $halaman;

            $query = http_build_query($params);
                 if ((($halaman >= $nohalaman - 2) && ($halaman <= $nohalaman + 2)) || ($halaman == 1) || ($halaman == $jumhalaman)) 
                 {   
                    if (($showhalaman == 1) && ($halaman != 2)){  $output .= "<li><a>...</a></li>";} 
                    if (($showhalaman != ($jumhalaman - 1)) && ($halaman == $jumhalaman)){  $output .= "<li><a>...</a></li>";}
                    if ($halaman == $nohalaman){                    
                        $output .= '<li><a href="">'.$halaman.'</a></li>';
                    }else{ 
                        $output .= '<li><a href="?'.$query.'">'.$halaman.'</a></li>';
                    }
                    $showhalaman = $halaman;          
                 }
        }

        // menampilkan link next
        if ($nohalaman < $jumhalaman){ 

            $params = $_GET;
            $params['hal'] = $nohalaman+1;

            $query = http_build_query($params);
            $output .= '<li><a href="?'.($query).'" data-title="Next Page">Next</a></li>';
        } 

        $output.='</ul>';
        return $output;
    }

}

/* End of file  */
/* Location: ./application/models/ */
