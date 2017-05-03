<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LibMgr
{
    /** @var CI_Controller */
    private $CI;

    /**
     * LibMgr constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance();
    }


    public function load(string $className)
    {
        $this->CI->load->library($className);
        $lowerClassName = strtolower($className);
        return $this->CI->$lowerClassName;
    }
}