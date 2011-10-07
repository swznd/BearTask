<?php
class Option_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}                         
	
	function get_theme() {
		$theme = $this->get_option('theme');
		if(is_object($theme))
		return $theme->option_value;
	}
	
	function get_sitename() {
		$sitename = $this->get_option('sitename');
		if(is_object($sitename))
		return $sitename->option_value;
	}
	
	function get_option($option) {
		$this->db->where('option_name',$option);
		return $this->db->get('options')->row();
	}
}
?>