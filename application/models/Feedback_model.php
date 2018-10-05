<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {


	public function save_feedback(){
		$data=array();
	
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['phone']=$this->input->post('phone',true);
		$data['subject']=$this->input->post('subject',true);
		$data['message']=$this->input->post('message',true);
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('view_key',true)==null){
			$data['view_key']=0;
		}else
		$data['view_key']=$this->input->post('view_key',true);
		$sdata = array();
		
		
		$this->db->insert('feedback',$data);
		$sdata['message'] = 'Feedback has sent successfully';
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}
	
		public function show_all_feedbacks(){
			$this->db->select('*');
		$this->db->from('feedback');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_feedback_info_by_id($feedback_id){
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('id',$feedback_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	



		public function delete_feedback_by_id($feedback_id){
		
		$this->db->where('id',$feedback_id);
		$this->db->delete('feedback');


	}

	public function hide_feedback_info($feedback_id){

		/*
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('id',$feedback_id);
		$q=$this->db->get();
		$r=$q->row();*/
		
		$query = $this->db->query("select * from feedback where id='$feedback_id'");
		$r = $query->row();


				$data=array();
		if($r->view_key==1){
				$data['view_key']=0;
		}else{ 	$data['view_key']=1;}


		$this->db->where('id',$feedback_id);
		$this->db->update('feedback',$data);

		$sdata['message'] = 'Action done successfully';
		$this->session->set_userdata($sdata);
		redirect('feedback-list');


	}



}
