<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {


	public function save_event(){
		$data=array();
		$data['date']=$this->input->post('date',true);
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		$data['details']=$this->input->post('details',true);
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
		$sdata = array();
			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/event/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->insert('event',$data);
		$sdata['message'] = 'Event added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-event');
	}
	
		public function show_all_events(){
			$this->db->select('*');
		$this->db->from('event');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_event_info_by_id($event_id){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id',$event_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_event_info(){
		$data=array();
		$id=$this->input->post('id',true);
		$data['date']=$this->input->post('date',true);
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		$data['details']=$this->input->post('details',true);
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
	
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/event/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->where('id',$id);
		$this->db->update('event',$data);


		$sdata['message'] = 'Event Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('event-list');
	}



		public function delete_event_by_id($event_id){
		
		$this->db->where('id',$event_id);
		$this->db->delete('event');


	}

	public function hide_event_info($event_id){

		/*
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id',$event_id);
		$q=$this->db->get();
		$r=$q->row();*/
		
		$query = $this->db->query("select * from event where id='$event_id'");
		$r = $query->row();


				$data=array();
		if($r->hide_key==1){
				$data['hide_key']=0;
		}else{ 	$data['hide_key']=1;}


		$this->db->where('id',$event_id);
		$this->db->update('event',$data);

		$sdata['message'] = 'Action done successfully';
		$this->session->set_userdata($sdata);
		redirect('event-list');


	}

	/*Home Part*/

		public function show_home_2_events(){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->limit(2);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function show_all_events_home(){
		$this->db->select('*');
		$this->db->from('event');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
