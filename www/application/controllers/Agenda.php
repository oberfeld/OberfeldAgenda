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
		$this->display($this->load->view('calendar/list', ['calendars' => $calendars], TRUE));
	}

	/**
	 * Show an iframe with all events for this calendar
	 *
	 * @param string $calendarid
	 * @return void
	 */
	public function termine($calendarid) {
		// Fetch calendar
		$calendar = $this->calendars->getCalendar($calendarid);

		// Output
		$this->display($this->load->view('calendar/events', ['calendar' => $calendar], TRUE), $calendar['name']);
	}

	/**
	 * Show the reservation form
	 *
	 * @param string $calendarid
	 * @return void
	 */
	public function reservieren($calendarid) {
		// Fetch calendar
		$calendar = $this->calendars->getCalendar($calendarid);

		// Output
		$this->display($this->load->view('calendar/eventform', ['calendar' => $calendar], TRUE), $calendar['name']);
	}
}
