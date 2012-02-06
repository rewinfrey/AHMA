<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	/**
	 * Controller for About Us section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/aboutus/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/aboutus/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/aboutus/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'vision' page
	public function index() {
	  $this->load->view('header');
		$this->vision();
		$this->load->view('footer');
	}
	
	// loads the "our vision" page
	public function vision() {
	  $this->load->view('header');
	  $this->load->view('vision');
	  $this->load->view('footer');
	}
	
	// loads the "why air house?" page
	public function why() {
	  $this->load->view('header');
	  $this->load->view('why');
	  $this->load->view('footer');
	} 

} // end class Aboutus 