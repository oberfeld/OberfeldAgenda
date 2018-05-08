<?php
/**
 * List of all calendars in nice cards
 * 
 * @param array $calendars [id, name, image, buttonlabel, aboUrl]
 * @author Christian Studer <cstuder@existenz.ch>
 */
?>
<div class="row">
  <div class="card-deck">
  <?php
    foreach($calendars as $cal) {
      $buttonlabel = $cal['buttonlabel'] ?? 'Reservieren';
    ?>
    <div class="col-sm-6 mt-3">
      <div class="card">
        <img class="card-img-top" src="<?php echo site_url("images/{$cal['image']}"); ?>" alt="Bild für <?php echo $cal['name']; ?>">
        <div class="card-body">
          <a href="<?php echo $cal['aboUrl']; ?>" title="Kalender abonnieren" class="float-right"><span class="oi oi-cloud-download"></span></a>
          <h5 class="card-title"><?php echo $cal['name']; ?></h5>
          <a href="<?php echo site_url("agenda/reservieren/{$cal['id']}"); ?>" class="btn btn-primary"><?php echo $buttonlabel; ?></a>
          <a href="<?php echo site_url("agenda/termine/{$cal['id']}"); ?>" class="btn btn-primary">Anzeigen</a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>
</div>
