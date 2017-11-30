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

    echo '<div class="mdl-cell mdl-cell--12-col">' . $infocontent . '</div>';
}

?>
<div class="cal-card-narrow cal-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col">
<div class="mdl-card__title" style="background: url('<?php echo site_url("images/{$cal['image']}"); ?>') center / cover;">
  <h2 class="mdl-card__title-text"><?php echo $cal['name']; ?></h2>
</div>
<div class="mdl-card__actions mdl-card--border">
  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo site_url("agenda/reservieren/{$cal['id']}"); ?>">
  <?php echo $cal['buttonlabel'] ?? 'Reservieren'; ?>
  </a>
</div>
<div class="mdl-card__menu">
  <a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="Kalender abonnieren" href="<?php echo $cal['aboUrl']; ?>">
    <i class="material-icons">cloud_download</i>
  </a>
</div>
</div>

<div class="mdl-cell mdl-cell--9-col nextcloud-iframe">
<iframe height="100%" src="<?php echo $cal['embedUrl']; ?>"></iframe>
</div>