<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    /** @var MyService */
    private $myService;

    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->myService = $this->libMgr->load('MyService');
    }

    public function index()
    {
        $data['message'] = $this->myService->getMessage();
        $this->load->view('welcome_message', $data);
    }
}
