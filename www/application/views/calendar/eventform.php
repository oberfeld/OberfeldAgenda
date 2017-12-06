<?php
/**
 * Show the event edit form
 * 
 * @param array $calendar
 * @param array $event
 * @author Christian Studer <cstuder@existenz.ch>
 */
$this->load->helper(['form', 'html']);

$newEvent = !isset($event);
$formtitle = $newEvent ? 'Neuen Termin erstellen' : 'Termin editieren';

$timeoptions = [];
for($h = 0; $h <= 24; $h++) {
  $timeoptions[$h * 60] = sprintf('%02d:00', $h);
  $timeoptions[($h * 60) + 30] = sprintf('%02d:30', $h);
}
array_pop($timeoptions); // Remove 24:30.

if(isset($cal['infos'])) {
    $infocontent = $this->load->view("calendar-infos/{$calendar['infos']}", NULL, TRUE);
    echo '<div class="mdl-cell mdl-cell--12-col">' . $infocontent . '</div>';
}

$this->load->view('parts/cal-card-narrow', [
  'cal' => $calendar,
  'buttonlabel' => 'Anzeigen',
  'buttonurl' => site_url("agenda/termine/{$calendar['id']}"),
]);

?>
<div class="mdl-cell mdl-cell--9-col">
<h1><?php echo $formtitle; ?></h1>
<?php
  echo form_open("agenda/reservieren/{$calendar['id']}");

  echo mdl_form_input('Beschreibung', 'subject', $event['subject'] ?? '') . br();
  echo mdl_form_input('Von', 'fromdate', $event['fromdate'] ?? '', 'date') . ' ' . mdl_form_dropdown('Uhrzeit', 'frommin', $timeoptions, $event['frommin'] ?? '') . br();
  echo mdl_form_input('Bis', 'todate', $event['todate'] ?? '', 'date') . br();

  echo '<p>';

  echo mdl_form_input('Dein Name', 'name', $event['name'] ?? '') . br();
  echo mdl_form_input('Deine Email-Adresse', 'name', $event['email'] ?? '', 'email') . br();
  echo mdl_form_input('Deine Telefonnummer', 'tel', $event['tel'] ?? '', 'tel') . br();

  echo '<p>';

  echo form_hidden('eventid', $event['id'] ?? '');
  echo mdl_form_submit($calendar['buttonlabel']);
  
  echo form_close();
?>
</div>