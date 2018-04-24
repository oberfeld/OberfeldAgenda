<?php
/**
 * HTML5 header with Bootstrap loaded and grid ready
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
    <?php
      echo link_tag('images/if_schedule_3755.ico', 'shortcut icon', 'image/ico');
      echo link_tag('css/agenda.css');
      echo link_tag('css/open-iconic/font/css/open-iconic-bootstrap.css');
    ?>
</head>
<body>
  <?php $this->load->view('parts/navbar', ['title' => $title]); ?>
  
  <div class="container-fluid">
    <?php echo $content; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
