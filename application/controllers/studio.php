<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studio extends CI_Controller {

	/**
	 * Controller for Contact section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/studio/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/studio/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/studio/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'studio' page
	public function index() {
	  $this->load->view('header');
		$this->about();
		$this->load->view('footer');
	}
	
	// loads the "about the studio" page
	public function about() {
	  $this->load->view('header');
	  $this->load->view('about');
	  $this->load->view('footer');
	}

	// loads the "booking" page
	public function booking() {
	  $this->load->view('header');
	  $this->load->view('booking');
	  $this->load->view('footer');
	}

  // loads the "engineers" page
	public function engineers() {
	  $this->load->view('header');
	  $this->load->view('engineers');
	  $this->load->view('footer');
	}
	
	// loads the "clients" page
	public function clients() {
	  $this->load->view('header');
	  $this->load->view('clients');
	  $this->load->view('footer');
	}
	
	// loads the "gear" page
	public function gear() {
	  $this->load->view('header');
	  $this->load->view('gear');
	  $this->load->view('footer');
	}
	
} // end class Studio