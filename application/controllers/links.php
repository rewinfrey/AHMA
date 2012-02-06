<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Links extends CI_Controller {

	/**
	 * Controller for Contact section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/links/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/links/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/links/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'links' page
	public function index() {
		$this->link();
	}
	
	// loads the "links" page
	public function link() {
	  $this->load->view('header');
	  $this->load->view('links');
	  $this->load->view('footer');
	}
	
} // end class Links