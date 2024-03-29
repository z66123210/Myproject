<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index($page = 'login_view')
{
      /*  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/

        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

public function signup($page = 'signup_view')
{
      /*  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/

        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		//$this->load->view('templates/Navbar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

public function buyticket($page = 'buyticket_view')
{
      /*  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/

        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('templates/Navbar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

public function reviewticket($page = 'reviewticket_view')
{
      /*  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/

        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('templates/Navbar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

public function timetable($page = 'timetable_view')
{
      /*  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/

        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('templates/Navbar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}


}
