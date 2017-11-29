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
<html>
<head>
    <meta charset="utf-8">
    <meta lang="de">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>
