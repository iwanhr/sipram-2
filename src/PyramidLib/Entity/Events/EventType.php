<?php

namespace PyramidLib\Entity\Events;

class EventType {
    
    private $dbLib;

    public function __construct($db)
    {
        $this->dbLib = $db;
    }

    public function getListTypeEvents () {
        $query = "select id_event_type, event_type_name from tbl_event_type where id_parent_type !=0;";
        $queryData = $this->dbLib->query($query);
        $data = $queryData->result_array();
            
        $respond = array();
        foreach ($data as $v) {
            $respond[] = array(
                'id' => $v['id_event_type'], 'label' => $v['event_type_name'],
            );
        }
        return $respond;
    }
}
