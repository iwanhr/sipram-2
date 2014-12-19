<?php

namespace PyramidLib\Common;

class SessionAdapter {
	
	/*
	* @input $sessionData Data User, $sessionName Nama Session
	* @return boolean
	*/
	public function saveSession($sessionData, $sessionName) {
		if (is_object($sessionData)) {
			$_SESSION[$sessionName] = $sessionData;
			return true;
		} else {
			return false;
		}
	}

	public function deleteSession($sessionName) {
		if(!empty($sessionName)) {
			unset($_SESSION[$sessionName]);
			return true;
		}
		return false;
	}

}