<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_Controller {

	/**
	 * Index page: Show list of calendars
	 */
	public function index()
	{
		// Fetch calendars
		$calendars = $this->calendars->getAllCalendars();

		// Output
		$content = $this->load->view('calendar/list', ['calendars' => $calendars], TRUE);
		$this->display($content);
	}
}
