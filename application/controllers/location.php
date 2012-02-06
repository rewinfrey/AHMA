<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {

	/**
	 * Controller for Contact section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/location/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/location/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/location/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'location' page
	public function index() {
	  $this->load->view('header');
		$this->directions();
		$this->load->view('footer');
	}
	
	// loads the "directions" page
	public function directions() {
	  $this->load->view('header');
	  $this->load->view('directions');
	  $this->load->view('footer');
	}
	
	// loads the "parking" page
	public function parking() {
	  $this->load->view('header');
	  $this->load->view('parking');
	  $this->load->view('footer');
	}
	
	// loads the "facilities" page
	public function facilities() {
	  $this->load->view('header');
	  $this->load->view('facilities');
	  $this->load->view('footer');
	}
  
} // end class Location