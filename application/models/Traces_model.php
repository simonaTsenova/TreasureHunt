<?php
class Traces_model extends CI_Model {

		public function get_all_traces()
		{
			$q = $this->db->get('traces');
			return $q->result_array();
		}

		public function get_single_trace($trace_id)
		{
			$this->db->where('trace_id', $trace_id);
			$q = $this->db->get('traces');
			return $q->row_array();
		}

		public function add_trace()
		{
			$trace = array(
				'trace' => $this->input->post('trace'),
				'answer' => $this->input->post('answer'),
				'week' => $this->input->post('week'),
				'trace_number' => $this->input->post('trace_number')
				);
			return $this->db->insert('traces', $trace);
		}

		public function delete_trace()
		{
			$this->db->where('trace_id', $this->uri->segment(3));
			return $this->db->delete('traces');
		}

		public function update_trace()
		{
			$data = array(
					'trace' => $this->input->post('trace'),
					'answer' => $this->input->post('answer'),
					'week' => $this->input->post('week'),
					'trace_number' => $this->input->post('trace_number')
				);

			$this->db->where('trace_id', $this->uri->segment(3));
			return $this->db->update('traces', $data);
		}

}
?>
