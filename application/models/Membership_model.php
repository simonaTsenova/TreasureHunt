<?php
	class Membership_model extends CI_Model {

		public function validate()
		{
			$this->db->where('email', $this->input->post('email'));
			$this->db->where('password', $this->input->post('password'));
			$query = $this->db->get('users');

			if($query->num_rows() == 1)
			{
				return true;
			}
		}

		public function get_user_info()
		{
			$this->db->where('email', $this->input->post('email'));
			$this->db->where('password', $this->input->post('password'));
			$q = $this->db->get('users');

			return $q->row_array();
		}

		public function get_team_id($user_id)
		{
			$this->db->where('user_id', $user_id);
			$q = $this->db->get('teams');

			return $q->row_array();
		}
	}
?>