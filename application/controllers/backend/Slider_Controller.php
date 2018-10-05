<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_Controller extends CI_Controller {


	public function add_slider()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/slider/add_slider','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_slider()
	{	
		$this->load->model('Slider_model');

		$this->Slider_model->save_slider();
	}

		public function show_slider()
	{	
		$data=array();
			$data['show_all_sliders']=$this->Slider_model->show_all_sliders();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/slider/slider_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_slider($slider_id)
	{	

		$data=array();
		$data['all_slider_info_by_id']=$this->Slider_model->all_slider_info_by_id($slider_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/slider/edit_slider',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_slider()
	{	

		$this->Slider_model->update_slider_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('slider-list');
	}
		public function delete_slider($slider_id)
	{	

		$this->Slider_model->delete_slider_by_id($slider_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('slider-list');
	}


}
