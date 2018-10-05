<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource_person_Controller extends CI_Controller {


	public function add_resource_person()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/resource_person/add_resource_person','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_resource_person()
	{	
		$this->load->model('Resource_person_model');

		$this->Resource_person_model->save_resource_person();
	}

		public function show_resource_person()
	{	
		$data=array();
			$data['show_all_resource_persons']=$this->Resource_person_model->show_all_resource_persons();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/resource_person/resource_person_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_resource_person($resource_person_id)
	{	

		$data=array();
		$data['all_resource_person_info_by_id']=$this->Resource_person_model->all_resource_person_info_by_id($resource_person_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/resource_person/edit_resource_person',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_resource_person()
	{	

		$this->Resource_person_model->update_resource_person_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('resource_person-list');
	}
		public function delete_resource_person($resource_person_id)
	{	

		$this->Resource_person_model->delete_resource_person_by_id($resource_person_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('resource_person-list');
	}

			public function hide_resource_person($resource_person_id)
	{	
			
		$this->Resource_person_model->hide_resource_person_info($resource_person_id);
		$sdata['message']='Action Done successfully';
		$this->session->set_useradata($sdata);
		redirect('resource_person-list');
	}



}
