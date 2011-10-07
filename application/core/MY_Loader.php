<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {   
	
	public function __construct() {
		parent::__construct();
		$this->set_default_theme();
	}                         
	
    public function set_default_theme($theme_name = 'default'){
        $this->_ci_view_path = APPPATH . 'views/' . $theme_name.'/';
    }	
}