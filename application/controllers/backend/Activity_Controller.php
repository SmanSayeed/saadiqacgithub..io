<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_Controller extends CI_Controller {


	public function add_activity()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/activity/add_activity','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_activity()
	{	
		$this->load->model('Activity_model');

		$this->Activity_model->save_activity();
	}

		public function show_activity()
	{	
		$data=array();
			$data['show_all_activitys']=$this->Activity_model->show_all_activitys();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/activity/activity_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_activity($activity_id)
	{	

		$data=array();
		$data['all_activity_info_by_id']=$this->Activity_model->all_activity_info_by_id($activity_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/activity/edit_activity',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_activity()
	{	

		$this->Activity_model->update_activity_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('activity-list');
	}
		public function delete_activity($activity_id)
	{	

		$this->Activity_model->delete_activity_by_id($activity_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('activity-list');
	}
	
		public function hide_activity($activity_id)
	{	
			
		$this->Activity_model->hide_activity_info($activity_id);
		$sdata['message']='Action Done successfully';
		$this->session->set_useradata($sdata);
		redirect('activity-list');
	}


}
?>