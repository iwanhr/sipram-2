<?php

namespace PyramidLib\Helper;

class Authentication {

	public function encrypt($string) 
	{	
		return md5($string);
	}
}
