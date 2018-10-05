<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function admin_model_info($username,$password)
	{

			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('admin_name',$username);
			$this->db->where('admin_password',md5($password));
			$query_result = $this->db->get();
			$result = $query_result->row();


			return $result;
	}

	public function save_admin_info(){
		$data=array();
		$data['admin_name']=$this->input->post('admin_name',true);
		$pass=$this->input->post('admin_password',true);
		$data['admin_password']=md5($pass);
		$data['admin_email']=$this->input->post('admin_email',true);
		$data['admin_role']=$this->input->post('role',true);
		
		$sdata = array();
		
		$this->db->insert('admin',$data);
		$sdata['message'] = 'Admin added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-admin');
	}

		public function all_admin_info(){
		$this->db->select('*');
		$this->db->from('admin');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}
	public function all_admin_info_by_id($admin_id){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_id',$admin_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_admin_info(){
		$data=array();
		$admin_id=$this->input->post('admin_id',true);

		$data['admin_name']=$this->input->post('admin_name',true);
		$data['admin_email']=$this->input->post('admin_email',true);
	
		$data['admin_role']=$this->input->post('role',true);
		$sdata=array();
		
		$this->db->where('admin_id',$admin_id);
		$this->db->update('admin',$data);


		$sdata['message'] = 'admin Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('admin-list');
	}

		public function delete_admin_by_id($admin_id){
		
		$this->db->where('admin_id',$admin_id);
		$this->db->delete('admin');


	}
}
