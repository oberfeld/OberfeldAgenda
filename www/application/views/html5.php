<?php
/**
 * HTML5 header with Material Design Lite loaded and grid ready
 * 
 * @param string $title
 * @param string $content
 * @author Christian Studer <cstuder@existenz.ch>
 */
$this->load->helper('html');

$title = isset($title) ? "{$title} &mdash; Oberfeld Agenda" : 'Oberfeld Agenda';

?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>
    <?php
      echo link_tag('images/if_schedule_3755.ico', 'shortcut icon', 'image/ico');
      echo link_tag('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
      echo link_tag('https://fonts.googleapis.com/icon?family=Material+Icons');
      echo link_tag('css/mdl/material.min.css');
      echo link_tag('css/mdl-selectfield/mdl-selectfield.min.css');
      echo link_tag('css/agenda.css');

      echo script_tag('js/jquery-3.2.1.min.js');
      echo script_tag('js/moment-with-locales.min.js');
      echo script_tag('css/mdl/material.min.js');
      echo script_tag('css/mdl-selectfield/mdl-selectfield.min.js');
    ?>
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
