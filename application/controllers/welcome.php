<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    public function access_map(){
        return array(

            'index'=>'view',

        );
    }


	public function index()
	{
        $data = array();

        $data['title'] = "Welcome";

        $data['maincontent'] =$this->load->view('layouts/content',$data, true);
        $this->load->view('index',$data);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */