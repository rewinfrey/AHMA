<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {

	/**
	 * Controller for Classes section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/classes/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/classes/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/classes/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'sound' page
	public function index() {
	  $this->load->view('header');
		$this->sound();
		$this->load->view('footer');
	}
	
	// loads the "sound engineering" page
	public function sound() {
	  $this->load->view('header');
	  $this->load->view('sound');
	  $this->load->view('footer');
	}
	
	public function electronic() {
		$this->load->view('header');
		$this->load->view('electronic');
		$this->load->view('footer');
	}
	// loads "micajah ryan" page
	public function micajahryan() {
    $this->load->view('header');
    $this->load->view('micajahryan');
    $this->load->view('footer');
	}
	
} // end class Classes