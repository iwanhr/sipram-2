<?php

namespace PyramidLib\Common;

class SessionAdapter {
    /*
     * @input $sessionData Data User, $sessionName Nama Session
     * @return boolean
     */

    public function saveSession($sessionData, $sessionName)
    {
        if (is_object($sessionData)) {
            $_SESSION[$sessionName] = $sessionData;
            return true;
        } else {
            return false;
        }
    }

    /*
     * @input $sessionName Nama Session
     * @return boolean
     */

    public function deleteSession($sessionName)
    {
        if (!empty($sessionName)) {
            unset($_SESSION[$sessionName]);
            return true;
        }
        return false;
    }

    /*
     * @input $sessionName Nama Session, $rediredct boolean, $rediredctUrl string
     * @return boolean
     */

    public function checkSession($sessionName, $redirect = true, $redirectUrl = "")
    {
        if (empty($_SESSION[$sessionName])) {
            if ($redirect) {
                redirect(base_url($redirectUrl));
            } else {
                return true;
            }
        } else {
            if ($redirect) {
                redirect(base_url($redirectUrl));
            } else {
                return true;
            }
        }
    }

    /*
     * @input $sessionName Nama Session, $rediredct boolean, $rediredctUrl string
     * @return boolean
     */

    public function inSession($sessionName, $redirectUrl = "")
    {
        if (!isset($_SESSION[$sessionName])) {
            redirect(base_url($redirectUrl));
        }
        return $_SESSION[$sessionName];
    }

    /*
     * @input $sessionName Nama Session, $rediredct boolean, $rediredctUrl string
     * @return boolean
     */

    public function isAllowed($sessionName, $id_level)
    {
        
    }

}
