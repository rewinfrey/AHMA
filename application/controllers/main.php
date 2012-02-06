<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Controller for main splash page [default controller as defined in /application/config/config.php]
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/
	 *	- or -  
	 * 		http://www.airhousemusic.com/main
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // default loads "main" splash page
	public function index() {
		$this->home();
	}

  // loads the "main" page
	public function home() {
	  $this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
	
} // end of class Main
