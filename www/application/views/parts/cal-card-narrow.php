<?php
/**
 * Small rectangular calendar card with a button
 * 
 * @param array $calendar
 * @param string $buttonlabel
 * @param string $buttonurl
 * @author Christian Studer <cstuder@existenz.ch>
 */
?>
<div class="card">
  <img class="card-img-top" src="<?php echo site_url("images/{$calendar['image']}"); ?>" alt="Bild für <?php echo $calendar['name']; ?>">
  <div class="card-body">
    <a href="<?php echo $calendar['aboUrl']; ?>" title="Kalender abonnieren" class="float-right"><span class="oi oi-cloud-download"></span></a>
    <h5 class="card-title"><?php echo $calendar['name']; ?></h5>
    <a href="<?php echo $buttonurl; ?>" class="btn btn-primary"><?php echo $buttonlabel; ?></a>
  </div>
</div>