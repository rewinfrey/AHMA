<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ensembles extends CI_Controller {

	/**
	 * Controller for Classes section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/ensembles/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/ensembles/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/ensembles/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'sound' page
	public function index() {
	  $this->load->view('header');
		$this->jazz();
		$this->load->view('footer');
	}
	
	// loads the "jazz ensembles" page
	public function jazz() {
	  $this->load->view('header');
	  $this->load->view('jazz');
	  $this->load->view('footer');
	}
	
} // end class Ensembles