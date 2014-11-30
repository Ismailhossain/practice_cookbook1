<?php
class Employee extends CI_Model
{

    function __construct() {
        parent::__construct();
    }


    public function type_name()
    {
//        $this->db->select('type_id,type_name');
//        $this->db->from('user_types');
//        $resultSet = $this->db->get();
//        return $resultSet->result();

        return $this->db->get('user_types');



    }

    function saveemployee($data)
    {
        if (!empty($_POST)) {

            $this->db->insert('system_users', $data);
        }
    }

//    function allemployee()
//    {
//        $this->db->select('*');
//        $this->db->from('employee_info');
//        $query = $this->db->get();
//        return $query->result();
//    }

    public function allemployee() {

        $this->db->select('*');
        $this->db->from('system_users');
        $this->db->join('user_types', 'user_types.type_id=system_users.user_role_id');
//        $query = $this->db->get();
//        return $query->result();

        return $this->db->get();
    }

    public function editemployee($id)
    {

        $this->db->select('*');
        $this->db->from('system_users');
        $this->db->where('id',$id);
        $resultSet=$this->db->get ();
        return $resultSet->row();

    }

    public function update_employee($data)

    {
        $this->db->set('employee_name', $data['employee_name']);
        $this->db->set('employee_email', $data['employee_email']);
        $this->db->set('image', $data['image']);
//        $id=$data['employee_id'];
        $this->db->where('id', $data['id']);
        $this->db->update('system_users');
//        return $this->update($data,$id);

    }

public function delete_employee($id)
{

    $this->db->where('id', $id);
    $this->db->delete('system_users');
}



}