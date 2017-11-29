<?php
/**
 * HTML5 header with Material Design Lite loaded
 * 
 * @param string $title
 * @param string $content
 * @author Christian Studer <cstuder@existenz.ch>
 */

$title = isset($title) ? "Oberfeld Agenda - " : 'Oberfeld Agenda';

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
    <script src="<?php echo base_url('mdl/material.min.js'); ?>"></script>
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
    <div class="page-content"><?php echo $content; ?></div>
  </main>
</div>
</body>
</html>
