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
<div class="cal-card-narrow cal-card mdc-card mdc-layout-grid__cell mdc-layout-grid__cell--span-3">
  <section class="mdc-card__primary">
    <h1 class="mdc-card__title mdc-card__title--large"><?php echo $cal['name']; ?></h1>
   </section>
  <section class="mdc-card__actions">
    <button class="mdc-button mdc-button--compact mdc-card__action"><?php echo $buttonlabel; ?></button>
  </section>
</div>

<!--
<div class="mdl-card__title" style="background: url('<?php echo site_url("images/{$cal['image']}"); ?>') center / cover;">
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

-->
