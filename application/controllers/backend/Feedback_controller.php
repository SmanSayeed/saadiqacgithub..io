<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_Controller extends CI_Controller {


	public function add_feedback()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/feedback/add_feedback','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_feedback()
	{	
		$this->load->model('Feedback_model');

		$this->Feedback_model->save_feedback();
	}

		public function show_feedback()
	{	
		$data=array();
			$data['show_all_feedbacks']=$this->Feedback_model->show_all_feedbacks();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/feedback/feedback_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_feedback($feedback_id)
	{	

		$data=array();
		$data['all_feedback_info_by_id']=$this->Feedback_model->all_feedback_info_by_id($feedback_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/feedback/edit_feedback',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_feedback()
	{	

		$this->Feedback_model->update_feedback_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('feedback-list');
	}
		public function delete_feedback($feedback_id)
	{	

		$this->Feedback_model->delete_feedback_by_id($feedback_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('feedback-list');
	}
		public function hide_feedback($feedback_id)
	{	
			
		$this->Feedback_model->hide_feedback_info($feedback_id);
		$sdata['message']='Action Done successfully';
		$this->session->set_useradata($sdata);
		redirect('feedback-list');
	}


}
