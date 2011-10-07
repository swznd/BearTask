<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct() {
		parent::__construct();
	}                         
	
	public function index()
	{
		$this->template->set_title('Biore'); 
		$this->template->build();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */