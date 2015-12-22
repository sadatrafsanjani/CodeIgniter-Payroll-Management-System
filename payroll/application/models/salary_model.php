<?php

class Salary_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("salary");
    }

    function fetch_salary($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('employee', 'salary.employee_id = employee.employee_id');
        $query = $this->db->get("salary");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_salary_by_id($salary_id) {

        $this->db->join('employee', 'salary.employee_id = employee.employee_id');
        $query = $this->db->get_where('salary',array('salary_id'=>$salary_id));

        return $query->row();
    }

    function save_salary($data) {

        $this->db->insert('salary', $data);
    }

    function update_salary_by_id($salary_id,$data) {

        $this->db->where('salary_id',$salary_id);
        $this->db->update('salary',$data);
    }

    function delete_salary_by_id($employee_id) {

        $this->db->delete('salary', array('employee_id' => $employee_id));
    }
} 