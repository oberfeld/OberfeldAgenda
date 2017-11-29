<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MY_Controller {

	/**
	 * Index page: Show list of calendars
	 */
	public function index()
	{
		$this->display('hallo', 'Kalender');
	}
}
