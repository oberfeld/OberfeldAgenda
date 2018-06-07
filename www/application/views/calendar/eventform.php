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

// Top: Show calendar informations
$this->load->view('parts/calendar-infos', ['calendar' => $calendar]);

/* 
  <div class="form-group">
    <label for="subject">Beschreibung</label> 
    <input id="subject" name="subject" type="text" class="form-control here" required="required">
  </div>
  <div class="form-group">
    <label for="fromdate">Von</label> 
    <div class="input-group">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div> 
      <input id="fromdate" name="fromdate" type="text" class="form-control here" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="frommin">Uhrzeit</label> 
    <select id="frommin" name="frommin" class="form-control" required="required">
      <option value="0">00:00</option>
      <option value="30">00:30</option>
      <option value="480">08:00</option>
    </select>
  </div>
  <div class="form-group">
    <label for="todate">Bis</label> 
    <div class="input-group">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div> 
      <input id="todate" name="todate" type="text" class="form-control here" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="tomin">Uhrzeit</label> 
    <select id="tomin" name="tomin" class="form-control" required="required">
      <option value="rabbit">Rabbit</option>
      <option value="duck">Duck</option>
      <option value="fish">Fish</option>
    </select>
  </div>
  <div class="form-group">
    <label for="name">Dein Name</label> 
    <input id="name" name="name" type="text" class="form-control here" required="required">
  </div>
  <div class="form-group">
    <label for="email">Deine Email-Adresse</label> 
    <input id="email" name="email" type="text" class="form-control here" required="required">
  </div>
  <div class="form-group">
    <label for="tel">Deine Telefonnummer</label> 
    <input id="tel" name="tel" type="text" class="form-control here" aria-describedby="telHelpBlock"> 
    <span id="telHelpBlock" class="form-text text-muted">Optional, für Rückfragen</span>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

*/

// Left part: Cal card narrow, right part: event form
?>
<div class="row">
  <div class="col-sm-2">
    <?php
      $this->load->view('parts/cal-card-narrow', [
        'calendar' => $calendar,
        'buttonlabel' => 'Anzeigen',
        'buttonurl' => site_url("agenda/termine/{$calendar['id']}"),
      ]);
    ?>
  </div>

  <div class="col-sm-10">
    <h1><?php echo $formtitle; ?></h1>

<?php
  echo form_open("agenda/reservieren/{$calendar['id']}");

  echo bootstrap_form_input('Beschreibung', 'subject', $event['subject'] ?? '', 'text', TRUE) . br();
  echo bootstrap_form_input('Von', 'fromdate', $event['fromdate'] ?? '', 'date', TRUE) . ' ' . bootstrap_form_dropdown('Uhrzeit', 'frommin', $timeoptions, $event['frommin'] ?? '480', TRUE) . br();
  echo bootstrap_form_input('Bis', 'todate', $event['todate'] ?? '', 'date', TRUE) . ' ' . bootstrap_form_dropdown('Uhrzeit', 'tomin', $timeoptions, $event['tomin'] ?? '540', TRUE) . br();

  echo '<p>';

  echo bootstrap_form_input('Dein Name', 'name', $event['name'] ?? '', 'text', TRUE) . br();
  echo bootstrap_form_input('Deine Email-Adresse', 'name', $event['email'] ?? '', 'email', TRUE) . br();
  echo bootstrap_form_input('Deine Telefonnummer', 'tel', $event['tel'] ?? '', 'tel', FALSE) . br();

  echo '<p>';

  echo form_hidden('eventid', $event['id'] ?? '');
  echo bootstrap_form_submit($calendar['buttonlabel']);
  
  echo form_close();
?>
  </div>
</div>