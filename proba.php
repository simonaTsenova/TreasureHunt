ublic function show_user($id=1){
		$this->load->model('user_model');
		$data['user']=$this->user_model->get_single_user($id);
		$this->load->view('single_user',$data);
	}

	public function add_user_form(){
		$this->benchmark->mark('add_start');
		$this->load->library('form_validation');
		$this->load->view('add_user_form');
		$this->benchmark->mark('add_end');
		$this->output->enable_profiler(true);
	}
	public function add_user(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','usernameee','required');		
		$this->form_validation->set_rules('password','pass','required');		
		if($this->form_validation->run()===FALSE)
		{
			$this->add_user_form();
		}else
		{
			$this->load->model('user_model');
			$this->user_model->add_user();
			$thi