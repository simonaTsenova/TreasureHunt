<?php
	class Site extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('traces_model');
		}

		public function home()
		{
			$data['content'] = 'site_theme/home';
			$this->load->view('site_theme/main_template', $data);
		}

		public function stats()
		{
			$data['content'] = 'site_theme/stats';
			$this->load->view('site_theme/main_template', $data);
		}

		public function login()
		{
			$data['content'] = 'site_theme/login';
			$this->load->view('site_theme/main_template', $data);
		}

		public function validate_credentials()
		{
			$this->load->model('membership_model');
			$query = $this->membership_model->validate();

			$start_date = '2015-12-15';
			$datetime1 = date_create($start_date);
			$today = date('Y-m-d');
			$datetime2 = date_create($today);
			$interval = date_diff($datetime1, $datetime2);
			$days = $interval->format('%a');
			$week = floor($days/7);

			$info['user'] = $this->membership_model->get_user_info();
			$user_id = $info['user']['user_id'];
			$info['team'] = $this->membership_model->get_team_id($user_id);

			if($query) //if the user's credentials validated ...
			{
				$data = array(
					'email' => $this->input->post('email'),
					'is_logged_in' => true,
					'role' => $info['user']['role'],
					'team_id' => $info['team']['team_id'],
					'week' => $week
					); 

				$this->session->set_userdata($data);				
			}
			else
			{
				redirect('index.php/Site/login');
			}

			if($data['role'] == 1)
			{
				redirect('index.php/Site/admin_teacher');
			}
			else
			{
				redirect('index.php/Site/home');
			}
		}

		public function about_us()
		{
			$data['content'] = 'site_theme/about_us';
			$this->load->view('site_theme/main_template', $data);
		}
		public function contact()
		{
			$data['content'] = 'site_theme/contact';
			$this->load->view('site_theme/main_template', $data);
		}

		public function admin_teacher()
		{
			//$data['sidebar'] = 'admin_panel/left_sidebar';
			$data['content'] = 'admin_panel/teacher_dashboard';
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function teacher_traces()
		{
			$data['content'] = 'admin_panel/teacher_traces';
			$data['traces'] = $this->traces_model->get_all_traces();
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function show_single_trace($trace_id)
		{
			$data['trace'] = $this->traces_model->get_single_trace($trace_id);
		}
		
		public function add_trace_show()
		{
			$this->load->library('form_validation');
			$data['content'] = 'traces/add_trace_form';
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function add_trace()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('trace', 'Trace', 'required');
			$this->form_validation->set_rules('answer', 'Answer', 'required');
			$this->form_validation->set_rules('week', 'Week', 'required');
			$this->form_validation->set_rules('trace_number', 'Trace Number', 'required');

			if($this->form_validation->run() === FALSE)
			{
				$this->add_trace_show();
			}
			else
			{
				$this->traces_model->add_trace();
				$data['content'] = 'traces/trace_successful';
				$this->load->view('admin_panel/main_admin', $data);
			}
		}

		public function delete_trace()
		{
			$this->traces_model->delete_trace();
			$this->teacher_traces();
		}
		
		public function update_trace_show()
		{
			$this->load->library('form_validation');
			$data['trace'] = $this->traces_model->get_single_trace($this->uri->segment(3));
			$data['content'] = 'traces/update_form';
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function update_trace()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('trace', 'Trace', 'required');
			$this->form_validation->set_rules('answer', 'Answer', 'required');
			$this->form_validation->set_rules('week', 'Week', 'required');
			$this->form_validation->set_rules('trace_number', 'Trace Number', 'required');

			if($this->form_validation->run() === FALSE)
			{
				$this->update_trace_show();
			}
			else
			{
				$this->traces_model->update_trace();
				redirect('index.php/Site/teacher_traces');
			}
		}
//questions------------------------------------------------------
		public function teacher_questions()
		{
			$this->load->model('question_model');
			$data['questions'] = $this->question_model->get_all_questions();
			$data['content'] = 'admin_panel/teacher_questions';
			$this->load->view('admin_panel/main_admin', $data);
		}
		public function update_question_show()
		{
			$this->load->model('question_model');
			$this->load->library('form_validation');
			$data['question'] = $this->question_model->get_single_question($this->uri->segment(3));
			$data['content'] = 'questions/update_form';
			$this->load->view('admin_panel/main_admin', $data);
		}
		public function update_question()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('complexity', 'Complexity', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('question', 'Question', 'required');
			$this->form_validation->set_rules('week', 'Week', 'required');

			if($this->form_validation->run() === FALSE)
			{
				$this->update_question_show();
			}
			else
			{
				$this->load->model('question_model');
				$this->question_model->update_question();
				redirect('index.php/Site/teacher_questions');
			}
		}

		public function add_question_show()
		{
			$this->load->library('form_validation');
			$data['content'] = 'questions/add_question_form';
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function add_question()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('complexity', 'Complexity', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('question', 'Question', 'required');
			$this->form_validation->set_rules('week', 'Week', 'required');

			if($this->form_validation->run() === FALSE)
			{
				$this->add_question_show();
			}
			else
			{
				$this->load->model('question_model');
				$this->question_model->add_question();
				$data['content'] = 'questions/question_successful';
				$this->load->view('admin_panel/main_admin', $data);
			}
		}

		public function delete_question()
		{
			$this->load->model('question_model');
			$this->question_model->delete_question();
			redirect('index.php/Site/teacher_questions');
		}

		public function student_answer()
		{
			$data['content'] = 'admin_panel/student_answer';
			$this->load->view('admin_panel/main_admin', $data);
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('index.php/Site/home');
		}

		public function play()
		{
			$session_data = $this->session->all_userdata();
			$data['content'] = 'site_theme/play';
			$data['id'] = $session_data['team_id'];
			$data['week'] = $session_data['week'];
			$this->load->view('site_theme/main_template', $data);
		}
	}
?>