<?php
/**
 * Show the new form
 * 
 * @param array $calendar
 * @author Christian Studer <cstuder@existenz.ch>
 */

$cal = $calendar;

if(isset($cal['infos'])) {
    $infocontent = $this->load->view("calendar-infos/{$cal['infos']}", NULL, TRUE);

    echo '<div class="mdl-cell mdl-cell--12-col">' . $infocontent . '</div>';
}

$this->load->view('parts/cal-card-narrow', [
  'cal' => $cal,
  'buttonlabel' => 'Anzeigen',
  'buttonurl' => site_url("agenda/termine/{$cal['id']}"),
]);

?>
<div class="mdl-cell mdl-cell--9-col">
Formular hier. <!-- TODO continue here -->
</div>