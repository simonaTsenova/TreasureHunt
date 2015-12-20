<?php

class Question_model extends CI_Model{
	public function get_all_questions(){
		$q=$this->db->get('questions');
		return $q->result_array();
	}
	public function get_single_question($id)
	{
		$this->db->where('question_id',$id);
		$q=$this->db->get('questions');
		return $q->row_array();
	}
	public function update_question()
	{
		$data = array(
					'complexity' => $this->input->post('complexity'),
					'category' => $this->input->post('category'),
					'question' => $this->input->post('question'),
					'week' => $this->input->post('week')
				);

			$this->db->where('question_id', $this->uri->segment(3));
			return $this->db->update('questions', $data);
	}
	public function add_question()
	{
		$question = array(
			'complexity' => $this->input->post('complexity'),
			'category' => $this->input->post('category'),
			'question' => $this->input->post('question'),
			'week' => $this->input->post('week')
			);
		return $this->db->insert('questions', $question);
	}

	public function delete_question()
	{
		$this->db->where('question_id', $this->uri->segment(3));
		return $this->db->delete('questions');
	}
}