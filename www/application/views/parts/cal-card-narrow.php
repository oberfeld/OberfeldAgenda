<?php
/**
 * Small rectangular calendar card with a button
 * 
 * @param array $cal
 * @param string $buttonlabel
 * @param string $buttonurl
 * @author Christian Studer <cstuder@existenz.ch>
 */
?>
<div class="cal-card-narrow cal-card mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col">
<div class="mdl-card__title" style="background: url('<?php echo site_url("images/{$cal['image']}"); ?>') center / cover;">
  <h2 class="mdl-card__title-text"><?php echo $cal['name']; ?></h2>
</div>
<div class="mdl-card__actions mdl-card--border">
  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo $buttonurl; ?>">
  <?php echo $buttonlabel; ?>
  </a>
</div>
<div class="mdl-card__menu">
  <a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="Kalender abonnieren" href="<?php echo $cal['aboUrl']; ?>">
    <i class="material-icons">cloud_download</i>
  </a>
</div>
</div>
