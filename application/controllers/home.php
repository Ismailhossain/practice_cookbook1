<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function access_map(){
        return array(

            'index'=>'view',

        );
    }

    function index()
    {
        $data=array();
        $data['title'] = "Welcome to HRM project";
        $data['maincontent'] =$this->load->view('layouts/content',$data, true);
        $this->load->view('index',$data);



//        if($this->session->userdata('logged_in'))
//        {
//            $session_data = $this->session->userdata('logged_in');
//            $data['username'] = $session_data['username'];
//            $this->load->view('index', $data);
//        }
//        else
//        {
//            //If no session, redirect to login page
//            redirect('login', 'refresh');
//        }

    }

//    function logout()
//    {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        redirect('login', 'refresh');
//    }

}

?>
