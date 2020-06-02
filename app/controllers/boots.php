<?php


class boots extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function homepage()
    {
        $this->load->view('site/index');
    }

    public function getdata()
    {
        
    }
}