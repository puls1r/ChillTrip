<?php
class Cek extends CI_Controller
{
    public $logged = '';
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(['form', 'url', 'security']);
        $this->load->library(['session', 'form_validation']);

        $this->logged = $this->session_check();
    }


    /*
     * Check the Session status
     * if session exist return true
     * else return false
     * */

    public function session_check()
    {
        if($this->session->userdata('logged_in') != null)
            return TRUE;
        else
            return FALSE;
    }
}