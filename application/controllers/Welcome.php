<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    /** @var MyService */
    private $myService;

    /** @var MyModel */
    private $myModel;

    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->myService = $this->libMgr->loadService('MyService');
        $this->myModel = $this->libMgr->loadModel('MyModel');
    }

    /**
     * 載入 service 範例
     */
    public function loadService()
    {
        $data['message'] = $this->myService->getMessage();
        $this->load->view('welcome_message', $data);
    }

    /**
     * 載入 model 範例
     */
    public function loadModel()
    {
        $data['message'] = $this->myModel->getMessage();
        $this->load->view('welcome_message', $data);
    }
}
