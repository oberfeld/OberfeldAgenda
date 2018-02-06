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
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?php echo $title; ?></title>
    <?php
      echo link_tag('images/if_schedule_3755.ico', 'shortcut icon', 'image/ico');
      echo link_tag('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
      echo link_tag('https://fonts.googleapis.com/icon?family=Material+Icons');
      echo link_tag('https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css');

      echo script_tag('https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js');
      echo script_tag('dist/bundle.js');
    ?>
</head>
<body class="mdc-typography">
  <div class="mdl-layout mdl-js-layout">
  <header class="mdc-toolbar">
    <div class="mdc-toolbar__row">
      <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
        <span class="mdc-toolbar__title"><?php echo $title; ?></span>
      </section>
      <section class="mdc-toolbar__section mdc-toolbar__section--align-end">
        <a href="#" class="material-icons mdc-toolbar__icon" aria-label="Zurück zur Übersicht" alt="Zurück zur Übersicht">home</a>
      </section>
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
