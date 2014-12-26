<?php

namespace PyramidLib\Helper;

class Convertion {

    public function userStatusActive($idStatus)
    {
        return $idStatus == 1 ? "Active" : "Deactived";
    }

    public function userStatus($idStatus)
    {
        switch ($idStatus) {
            case 1:
                $out = array('label' => 'Active', 'id' => 'success');
                break;
            case 2:
                $out = array('label' => 'Waiting Verified', 'id' => '');
                break;
            case 3:
                $out = array('label' => 'Banned', 'id' => 'important');
                break;
            default:
                $out = array('label' => 'Unverified', 'id' => 'warning');
                break;
        }

        return (object) $out;
    }
 
    public function postStatus($idStatus)
    {
        switch ($idStatus) {
            case 1:
                $out = array('label' => 'Publish', 'id' => 'success');
                break;
            case 2:
                $out = array('label' => 'Draft', 'id' => '');
                break;
            case 3:
                $out = array('label' => 'Deleted', 'id' => 'important');
                break;
            default:
                $out = array('label' => 'Unpublished', 'id' => 'warning');
                break;
        }

        return (object) $out;
    }

}
