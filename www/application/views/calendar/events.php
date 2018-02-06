<?php
/**
 * Show the events of a single calendar as an embedded iFrame
 * 
 * @param array $calendar
 * @author Christian Studer <cstuder@existenz.ch>
 */

$cal = $calendar;

if(isset($cal['infos'])) {
    $infocontent = $this->load->view("calendar-infos/{$cal['infos']}", NULL, TRUE);

    echo '<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">' . $infocontent . '</div>';
}

$this->load->view('parts/cal-card-narrow', [
  'cal' => $cal,
  'buttonlabel' => $cal['buttonlabel'] ?? 'Reservieren',
  'buttonurl' => site_url("agenda/reservieren/{$cal['id']}"),
]);

?>
<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-9 nextcloud-iframe">
  <iframe height="100%" src="<?php echo $cal['embedUrl']; ?>"></iframe>
</div>