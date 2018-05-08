<?php
/**
 * Show the events of a single calendar as an embedded iFrame
 * 
 * @param array $calendar
 * @author Christian Studer <cstuder@existenz.ch>
 */

$calendar;

if(isset($calendar['infos'])) {
    $infocontent = $this->load->view("calendar-infos/{$calendar['infos']}", NULL, TRUE);
?>
<div class="row">
  <div class="col-sm-12">
    <div class="alert alert-info" role="alert">
      <?php echo $infocontent; ?>
    </div>
  </div>
</div>

<?php
}

// Left part: Cal card narrow, right part: iframe
?>
<div class="row">
  <div class="col-sm-2">
    <?php
    $this->load->view('parts/cal-card-narrow', [
      'calendar' => $calendar,
      'buttonlabel' => $calendar['buttonlabel'] ?? 'Reservieren',
      'buttonurl' => site_url("agenda/reservieren/{$calendar['id']}"),
    ]);
?>
  </div>

  <div class="col-sm-10">
    <iframe height="100%" src="<?php echo $calendar['embedUrl']; ?>" class="nextcloud-iframe"></iframe>
  </div>
</div>
