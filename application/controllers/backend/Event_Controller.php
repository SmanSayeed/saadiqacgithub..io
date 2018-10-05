<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Controller extends CI_Controller {


	public function add_event()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/event/add_event','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_event()
	{	
		$this->load->model('Event_model');

		$this->Event_model->save_event();
	}

		public function show_event()
	{	
		$data=array();
			$data['show_all_events']=$this->Event_model->show_all_events();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/event/event_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_event($event_id)
	{	

		$data=array();
		$data['all_event_info_by_id']=$this->Event_model->all_event_info_by_id($event_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/event/edit_event',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_event()
	{	

		$this->Event_model->update_event_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('event-list');
	}
		public function delete_event($event_id)
	{	

		$this->Event_model->delete_event_by_id($event_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('event-list');
	}
		public function hide_event($event_id)
	{	
			
		$this->Event_model->hide_event_info($event_id);
		$sdata['message']='Action Done successfully';
		$this->session->set_useradata($sdata);
		redirect('event-list');
	}


}
