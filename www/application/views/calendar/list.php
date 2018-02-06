<?php
/**
 * List of all calendars in nice cards
 * 
 * @param array $calendars
 * @author Christian Studer <cstuder@existenz.ch>
 */

foreach($calendars as $cal) {
?>
<div class="cal-card-wide cal-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
  <div class="mdl-card__title" style="background: url('<?php echo site_url("images/{$cal['image']}"); ?>') center / cover;">
    <h2 class="mdl-card__title-text"><?php echo $cal['name']; ?></h2>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo site_url("agenda/reservieren/{$cal['id']}"); ?>">
    <?php echo $cal['buttonlabel'] ?? 'Reservieren'; ?>
    </a>

    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo site_url("agenda/termine/{$cal['id']}"); ?>">
    Anzeigen
    </a>
  </div>
  <div class="mdl-card__menu">
    <a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="Kalender abonnieren" href="<?php echo $cal['aboUrl']; ?>">
      <i class="material-icons">cloud_download</i>
    </a>
  </div>
</div>

<?php
}
