<?php
/**
 * HTML5 header with Material Design Lite loaded and grid ready
 * 
 * @param string $title
 * @param string $content
 * @author Christian Studer <cstuder@existenz.ch>
 */

$title = isset($title) ? "Oberfeld Agenda &mdash; {$title}" : 'Oberfeld Agenda';

?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="images/if_schedule_3755.ico">
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url('mdl/material.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('md-date-time-picker/css/mdDateTimePicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/agenda.css'); ?>">
    <script src="<?php echo base_url('mdl/material.min.js'); ?>"></script>
    <script src="<?php echo base_url('md-date-time-picker/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('md-date-time-picker/js/lang/de.js'); ?>"></script>
    <script src="<?php echo base_url('md-date-time-picker/js/scroll-into-view-if-needed.min.js'); ?>"></script>
    <script src="<?php echo base_url('md-date-time-picker/js/draggabilly.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('md-date-time-picker/js/mdDateTimePicker.js'); ?>"></script>
    <script type="text/javascript">
    (function() {
      moment.locale('de');
    }).call(this);
    </script>
</head>
<body>
  <div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title"><?php echo $title; ?></span>
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="<?php echo site_url('/'); ?>">Zur Übersicht</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="mdl-grid">
        <?php echo $content; ?>
      </div>
    </div>
  </main>
</div>
</body>
</html>
