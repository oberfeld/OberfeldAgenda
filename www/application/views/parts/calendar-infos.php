<?php
/**
 * Show calendar information text
 * 
 * @array $calendar
 */

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
