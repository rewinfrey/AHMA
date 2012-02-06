<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lessons extends CI_Controller {

	/**
	 * Controller for Lessons section
	 *
	 * Maps to the following URL
	 * 		http://www.airhousemusic.com/lessons/
	 *	- or -  
	 * 		http://www.airhousemusic.com/index.php/lessons/
	 * 
	 * Public methods not prefixed with an underscore will
	 * map to www.airhousemusic.com/lessons/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  // by default any urls pointed at this controller resolve to the 'approach' page
	public function index() {
		$this->approach();
	}
		
	// loads the "approach" page
	public function approach() {
	  $this->load->view('header');
	  $this->load->view('approach');
	  $this->load->view('footer');
	}

	// loads the "instruments" page
	public function instruments() {
	  $this->load->view('header');
	  $this->load->view('instruments');
	  $this->load->view('footer');
	}
	
	// loads the "teachers" page
	public function teachers() {
	  $this->load->view('header');
	  $this->load->view('teachers');
	  $this->load->view('footer');
	}
	
	// loads the "why lessons" page
	public function whylessons() {
	  $this->load->view('header');
	  $this->load->view('whylessons');
	  $this->load->view('footer');
	}
	
	// loads the "policy" page
	public function policy() {
	  $this->load->view('header');
	  $this->load->view('policy');
	  $this->load->view('footer');
	}
	
	/****************************
	*    Contains Individual    *
	*     Instrument Pages      *
	*****************************/
	
	// loads the "piano" page
	public function piano() {
	  $this->load->view('header');
	  $this->load->view('piano');
	  $this->load->view('footer');
	}
	
	// loads the "guitar" page
	public function guitar() {
	  $this->load->view('header');
	  $this->load->view('guitar');
	  $this->load->view('footer');
	}
	
	// loads the "bass" page
	public function bass() {
	  $this->load->view('header');
	  $this->load->view('bass');
	  $this->load->view('footer');
	}
	
	// loads the "voice" page
	public function voice() {
	  $this->load->view('header');
	  $this->load->view('voice');
	  $this->load->view('footer');
	}
	
	// loads the "wind instruments" page
	public function wind() {
	  $this->load->view('header');
	  $this->load->view('wind');
	  $this->load->view('footer');
	}
	
	// loads the "drums" page
	public function drums() {
	  $this->load->view('header');
	  $this->load->view('drums');
	  $this->load->view('footer');
	}

	// loads the "cello" page
	public function cello() {
	  $this->load->view('header');
	  $this->load->view('cello');
	  $this->load->view('footer');
	}
	
	/****************************
	*    Contains Individual    *
	*     Teacher Pages         *
	*****************************/
	
	// loads "anibal rivas" page
	public function anibalrivas() {
	  $this->load->view('header');
	  $this->load->view('anibalrivas');
	  $this->load->view('footer');
	}
	
	// loads "ben hunt" page
	public function benhunt() {
	  $this->load->view('header');
	  $this->load->view('benhunt');
	  $this->load->view('footer');
  }
  	
  // loads "bill harshbarger" page
  public function billharshbarger() {
    $this->load->view('header');
    $this->load->view('billharshbarger');
    $this->load->view('footer');
	}
	
	// loads "mary rose biltz" page
  public function maryrosebiltz() {
    $this->load->view('header');
    $this->load->view('maryrosebiltz');
    $this->load->view('footer');
	}
	
	// loads "courtney long" page
  public function courtneylong() {
    $this->load->view('header');
    $this->load->view('courtneylong');
    $this->load->view('footer');
	}
	
	// loads "marjean harshbarger" page
  public function marjeanharshbarger() {
    $this->load->view('header');
    $this->load->view('marjeanharshbarger');
    $this->load->view('footer');
	}
	
	// loads "stevehatfield" page
  public function stevehatfield() {
    $this->load->view('header');
    $this->load->view('stevehatfield');
    $this->load->view('footer');
  }
  
  // loads "david lord" page
  public function davidlord() {
    $this->load->view('header');
    $this->load->view('davidlord');
    $this->load->view('footer');
	}
	
	// loads "hannah puthoff" page
	public function hannahputhoff() {
    $this->load->view('header');
    $this->load->view('hannahputhoff');
    $this->load->view('footer');
	}
	
	// loads "matt grenier" page
	public function mattgrenier() {
    $this->load->view('header');
    $this->load->view('mattgrenier');
    $this->load->view('footer');
	}
	
	// loads "paul fowler" page
	public function paulfowler() {
    $this->load->view('header');
    $this->load->view('paulfowler');
    $this->load->view('footer');
	}
	
	// loads "kaye updegrove" page
	public function kayeupdegrove() {
    $this->load->view('header');
    $this->load->view('kayeupdegrove');
    $this->load->view('footer');
	}
	
	// loads "daniel alvarez" page
	public function danielalvarez() {
    $this->load->view('header');
    $this->load->view('danielalvarez');
    $this->load->view('footer');
	}
	
	// loads "caleb drummond" page
	public function calebdrummond() {
    $this->load->view('header');
    $this->load->view('calebdrummond');
    $this->load->view('footer');
	}

	// loads "roberto bernardinello" page
	public function robertobernardinello() {
    $this->load->view('header');
    $this->load->view('robertobernardinello');
    $this->load->view('footer');
	}

	// loads "parker stanley" page
	public function parkerstanley() {
    $this->load->view('header');
    $this->load->view('parkerstanley');
    $this->load->view('footer');
	}
	
} // end class Instruments
