<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employees extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('employee');
        $this->load->database();
    }



    public function index()
    {
        $data = array();
        $data['title'] = "Add Employee-info";
        $this->load->view('index', $data);


    }

    public function access_map(){
        return array(
            'index'=>'view',
            'addemployee'=>'view',
            'viewemployee'=>'view',
            'delete_employee'=>'view',
            'save_employee'=>'create',
            'save_employee'=>'view',
            'update_employee'=>'edit',
            'edit_employee'=>'view',


           );
    }




    public function addemployee()
    {
        $data = array();
        $data['title'] = "Add Employee";
        $data['query'] = $this->employee->type_name();
        $data['maincontent'] = $this->load->view('addemployee', $data, true);
        $this->load->view('index', $data);
    }


public function save_employee()
{
//    $data = array();

    $data['name'] = $this->input->post('name', true);
    $data['email'] = $this->input->post('email', true);

    $pass = $this->input->post('password', true);

//    $salt	= '1234';
    $salt	= uniqid('', TRUE);
    $data['password']	= $this->hash_password($pass, $salt);
    $data['verification_status'] = 1;

    $data['salt'] = $salt;





//    $data['password'] = $this->input->post('password', true);
//    $data ['password'] = do_hash($data['password'], 'md5');
//    $data['salt'] = uniqid('', TRUE);
//    $data ['password'] = sha1($data['password'] . $data['salt']);

    $data['user_role_id'] = $this->input->post('user_role_id', true);
    $this->employee->saveemployee($data);

    redirect('employees/viewemployee', 'refresh');







    // Begin validation
//    if ($this->form_validation->run() == FALSE) {
//
//        $data['maincontent'] = $this->load->view('addemployee', $data, true);
//        $this->load->view('index', $data);
//    } else {
//        $this->employee->saveemployee($data);
//        redirect('employees/viewemployee', 'refresh');
//
//    }


}
    public function hash_password($password, $salt=false)
    {
        if (empty($password))
        {
            return FALSE;
        }

        if ($salt)
        {
            return  sha1($password . $salt);
        }
        else
        {
            $salt = $this->salt();
            return  $salt . substr(sha1($salt . $password),0,5);
        }
    }




//    function viewemployee()
//    {
//        $data = array();
//        $data['result'] = $this->employee->allemployee();
//        $data['title'] = "View Employee List";
//        $data['maincontent'] = $this->load->view('employeelist', $data, true);
//        $this->load->view('index', $data);
//    }

    public function viewemployee() {
        $data = array();
        $data['query'] = $this->employee->allemployee();
        $data['title'] = "View Employee List";
        $data['maincontent'] = $this->load->view('employeelist', $data,true);
        $this->load->view('index', $data);
    }


    public function edit_employee($id)
    {
        $data = array();
        $data['title'] = "Edit Employee Information";
        $data['row'] = $this->employee->editemployee($id);
        $data['maincontent'] = $this->load->view('edit_employee', $data, true);
        $this->load->view('index', $data);
    }

    public function update_employee()

    {

        $this->load->helper('class.mu_helper');
        $obj = new MU($_FILES['image']);
        $imageselected = $obj->get_value('file_selected');
        if ($imageselected > 0) {
            $obj->allowed_extentions = array('.jpg', '.png', '.jpeg', '.gif');
            $obj->uploaddir = "." . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
            $obj->upload_files();
            $file_name = $obj->uploaded_files();

        }

        // Load support assets
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters ('', '<br />');

        // Set validation rules
        $this->form_validation->set_rules('employee_name', 'Employee name', 'required');
        $this->form_validation->set_rules('employee_email', 'Employee email', 'required');
//            $this->form_validation->set_rules('image', 'Image', 'required');

        $data['employee_id'] = $this->input->post('employee_id', true);

        $data['employee_name'] = $this->input->post('employee_name', true);
        $data['employee_email'] = $this->input->post('employee_email', true);
        @$data['image'] = $file_name;

        // Begin validation
//        if ($this->form_validation->run() == FALSE) {
//
//            $data['maincontent'] = $this->load->view('addemployee', $data, true);
//            $this->load->view('index', $data);
//        } else {
//            $this->employee->update_employee($data);
//            redirect('employees/viewemployee', 'refresh');
//
//        }
//
        $this->employee->update_employee($data);
        redirect('employees/viewemployee');

}



public function delete_employee($id)
{
    $this->employee->delete_employee($id);
//    redirect('employees/viewemployee');
    $this->viewemployee();



}









}