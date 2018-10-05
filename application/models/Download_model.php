<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model {


	public function save_download(){
		$data=array();
	
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
		$sdata = array();
			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='file/';
			$config['allowed_types']	='pdf|csv';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['file'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->insert('download',$data);
		$sdata['message'] = 'Download added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-download');
	}
	
		public function show_all_downloads(){
			$this->db->select('*');
		$this->db->from('download');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_download_info_by_id($download_id){
		$this->db->select('*');
		$this->db->from('download');
		$this->db->where('id',$download_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_download_info(){
		$data=array();
		$id=$this->input->post('id',true);
		
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
	
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
	
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='file/';
			$config['allowed_types']	='pdf|csv';
			$config['max_size']			=100000;
			//$config['max_width']		=204832;
			//$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('file')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['file'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->where('id',$id);
		$this->db->update('download',$data);


		$sdata['message'] = 'Download Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('download-list');
	}



		public function delete_download_by_id($download_id){
		
		$this->db->where('id',$download_id);
		$this->db->delete('download');


	}

	public function hide_download_info($download_id){

		/*
		$this->db->select('*');
		$this->db->from('download');
		$this->db->where('id',$download_id);
		$q=$this->db->get();
		$r=$q->row();*/
		
		$query = $this->db->query("select * from download where id='$download_id'");
		$r = $query->row();


				$data=array();
		if($r->hide_key==1){
				$data['hide_key']=0;
		}else{ 	$data['hide_key']=1;}


		$this->db->where('id',$download_id);
		$this->db->update('download',$data);

		$sdata['message'] = 'Action done successfully';
		$this->session->set_userdata($sdata);
		redirect('download-list');


	}

	/*Home Part*/

		public function show_home_2_downloads(){
		$this->db->select('*');
		$this->db->from('download');
		$this->db->limit(2);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function show_all_downloads_home(){
		$this->db->select('*');
		$this->db->from('download');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
