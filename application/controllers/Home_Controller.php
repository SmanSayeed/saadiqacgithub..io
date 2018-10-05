<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function index()
	{
		$data=array();
		
		$data['home_download']=$this->show_download_at_home();
		$data['home_resource_person']=$this->show_resource_person_at_home();
		$data['home_slider']=$this->show_slider_at_home();
		$data['home_activity']=$this->show_activity_at_home();
		$data['home_gallery']=$this->show_gallery_at_home();
		$data['home_main_content']=$this->load->view('public_part/pages/home',$data,true);
		$this->load->view('public_part/index',$data);
	}


	public function main_gallery()
	{	
		$data=array();
		$data['home_gallery']=$this->show_full_gallery();
		$this->load->view('public_part/pages/Gallery',$data);
	}




public function more_activity()
	{
		$data=array();
		$data['home_activity']=$this->show_full_activity();

		$this->load->view('public_part/pages/Activity',$data);
	}


		public function show_full_activity()
	{
		$data=array();
		$data['show_all_activitys']=$this->Activity_model->show_all_activitys_home();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_activitys'];
	}

		public function show_activity_at_home()
	{
		$data=array();
		$data['show_all_activitys']=$this->Activity_model->show_home_6_activitys();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_activitys'];
	}


	public function upcoming_events()
	{
		$data=array();
		$data['home_event']=$this->show_full_event();
		$this->load->view('public_part/pages/Event',$data);
	}



		public function show_gallery_at_home()
	{
		$data=array();
		$data['show_all_images']=$this->Gallery_model->show_home_6_images();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_images'];
	}


		public function show_full_gallery()
	{
		$data=array();
		$data['show_all_images']=$this->Gallery_model->show_all_images_home();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_images'];
	}


			public function show_slider_at_home()
	{
		$data=array();
		$data['show_all_sliders']=$this->Slider_model->show_all_sliders_home();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_sliders'];
	}

		public function show_full_event()
	{
		$data=array();
		$data['show_all_events']=$this->Event_model->show_all_events_home();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_events'];
	}


		public function show_resource_person_at_home()
	{
		$data=array();
		$data['show_all_resource_person']=$this->Resource_person_model->show_resource_person();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_resource_person'];
	}

		public function show_download_at_home()
	{
		$data=array();
		$data['show_all_download']=$this->Download_model->show_all_downloads_home();
		//echo "<pre>";print_r($data);echo "</pre>";;die;
		return $data['show_all_download'];
	}

		public function save_feedback()
	{
		
		$this->load->model('Feedback_model');

		$this->Feedback_model->save_feedback();
	}



}
