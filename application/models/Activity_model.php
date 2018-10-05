<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model {


	public function save_activity(){
		$data=array();
		$data['date']=$this->input->post('date',true);
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		$data['quote']=$this->input->post('details',true);
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
	
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/activity/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image1')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image1'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/activity/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image2')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image2'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/

		
		$this->db->insert('activity',$data);
		$sdata['message'] = 'Activity added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-activity');
	}
	
		public function show_all_activitys(){
			$this->db->select('*');
		$this->db->from('activity');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_activity_info_by_id($activity_id){
		$this->db->select('*');
		$this->db->from('activity');
		$this->db->where('id',$activity_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_activity_info(){
		$data=array();
		$id=$this->input->post('id',true);
		$data['date']=$this->input->post('date',true);
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		$data['quote']=$this->input->post('details',true);
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
	
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/activity/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image1')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image1'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/activity/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image2')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image2'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/

		$this->db->where('id',$id);
		$this->db->update('activity',$data);


		$sdata['message'] = 'Activity Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('activity-list');
	}



		public function delete_activity_by_id($activity_id){
		
		$this->db->where('id',$activity_id);
		$this->db->delete('activity');


	}

	public function hide_activity_info($activity_id){

		/*
		$this->db->select('*');
		$this->db->from('activity');
		$this->db->where('id',$activity_id);
		$q=$this->db->get();
		$r=$q->row();*/
		
		$query = $this->db->query("select * from activity where id='$activity_id'");
		$r = $query->row();


				$data=array();
		if($r->hide_key==1){
				$data['hide_key']=0;
		}else{ 	$data['hide_key']=1;}


		$this->db->where('id',$activity_id);
		$this->db->update('activity',$data);

		$sdata['message'] = 'Action done successfully';
		$this->session->set_userdata($sdata);
		redirect('activity-list');


	}

	/*Home Part*/

		public function show_home_6_activitys(){
		$this->db->select('*');
		$this->db->from('activity');
		$this->db->limit(6);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function show_all_activitys_home(){
		$this->db->select('*');
		$this->db->from('activity');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
