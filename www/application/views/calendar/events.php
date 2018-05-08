<?php
/**
 * Show the events of a single calendar as an embedded iFrame
 * 
 * @param array $calendar
 * @author Christian Studer <cstuder@existenz.ch>
 */

// Top: Show calendar informations
$this->load->view('parts/calendar-infos', ['calendar' => $calendar]);

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
