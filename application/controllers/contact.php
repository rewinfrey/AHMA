<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Controller for Contact section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/contact/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/contact/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/classes/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'contact' page
	public function index() {
		$this->contactus();
	}
	
	// loads the "contact" page
	public function contactus() {
	  $this->load->view('header');
	  $this->load->view('contact');
	  $this->load->view('footer');
	}
	
} // end class Contact