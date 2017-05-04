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


    /**
     * 統一載入 service 方式
     * @param string $className
     * @return mixed
     */
    public function loadService(string $className)
    {
        $this->CI->load->library($className);
        $lowerClassName = strtolower($className);
        return $this->CI->$lowerClassName;
    }

    /**
     * 統一載入 model 方式
     * @param string $className
     * @return mixed
     */
    public function loadModel(string $className)
    {
        $this->CI->load->model($className);
        return $this->CI->$className;
    }
}