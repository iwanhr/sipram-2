<?php

namespace PyramidLib\Helper;

class Authentication {

    public function encrypt($string)
    {
        if (is_string($string)) {
            return md5($string);
        } else {
            return (string) md5($string);
        }
    }

}
