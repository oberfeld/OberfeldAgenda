<?php
/**
 * Calendars model
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */
class Calendars extends CI_Model {
    /**
     * Get all calendars with all details as configured in `config/agenda.php`
     * 
     * Adds URLs to Nextcloud to the configured calendars.
     *
     * @return array
     */
    public function getAllCalendars() {
        $calendars = [];

        $calendarsAsConfigured = $this->config->item('calendars');

        // TODO complete this: Augment the objects with de-serialized CalDav-Objects
        foreach($calendarsAsConfigured as $cal) {
            $cal['embedUrl'] = $this->config->item('nextcloud') . "index.php/apps/calendar/embed/{$cal['key']}";
            $cal['aboUrl'] = str_replace('https', 'webcal', $this->config->item('nextcloud')) . "remote.php/dav/public-calendars/{$cal['key']}?export";

            $calendars[$cal['id']] = $cal;
        }

        return $calendars;
    }

    /**
     * Get single calendar
     *
     * @param string $calendarid
     * @return array
     */
    public function getCalendar($calendarid) {
        $calendars = $this->getAllCalendars();

        if(!isset($calendars[$calendarid]))
            throw new Exception('Invalid calendar id.');

        return $calendars[$calendarid];
    }
}