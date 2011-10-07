<?php
class MY_Controller extends MX_Controller {
	
	function __construct() {
		parent::__construct(); 
		$this->_boot();
	} 
	
	private function _boot() {
		$default_theme = $this->get_theme();
		$sitename = $this->get_sitename(); 
		
		if(empty($default_theme))
	    	$theme = 'default';
		
		$this->load->set_default_theme($default_theme);
		$this->template->set_sitename($sitename);   
	}  
	
	function get_theme() {
		return $this->Option_model->get_theme();
	}
	
	function get_sitename() {
		return $this->Option_model->get_sitename();
	}
}
?>