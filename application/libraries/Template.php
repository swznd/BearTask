<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Template {
	
	private $_ci;
	private $_theme = 'default';
	private $_title = '';
	private $_description = '';
	private $_metadata = array();
	private $_title_separator = ' | ';
	private $_sitename = '';
	
	
	function Template() {
		
	}   
	
	function __construct() {
		$this->_ci =& get_instance();
	}                                
	
   	public function set_metadata($name, $value) {
		$name = htmlspecialchars(strip_tags($name));
		$value = htmlspecialchars(strip_tags($value));
		
		if($name == 'keywords' AND ! strpos($value, ','))
			$content = preg_replace('/[\s]+/',', ', trim($value));
		
		$this->_metadata[$name] = '<meta name="'.$name.'" content="'.$content.'" />';
	}                                                                                
	
	public function set_sitename($name) {
		$this->_sitename = $name; 
	}
	
	public function set_title_separator($s) {
		$this->_title_separator = $s;
	}                                
	
	public function set_title($title, $type='full') { 
		if($type == 'full') {
			if($title == '')
				$this->_title_separator = '';
			
			$this->_title = $title.$this->_title_separator.$this->_sitename;
		}
		elseif($type == 'title') {
			$this->_title = $title;
		}                        
		else {
			$this->_title = $this->_sitename;
		}
	}                               
	
	public function build($vars = array(), $file='') {
		$data['title'] = $this->_title; 
		$this->_ci->load->view('default',$data);
	}
}