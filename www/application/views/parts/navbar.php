<?php
/**
 * Bootstrap navbar
 * 
 * @param string $title
 * @author Christian Studer <cstuder@existenz.ch>
 */
?>
<nav class="navbar navbar-expand-lg navbar-light oberfeld-bg justify-content-between">
  <a class="navbar-brand" href="#"><?php echo $title; ?></a>
  
  <div class="justify-content-between" id="navbarSupportedContent">
        <?php if($this->uri->uri_string()) { ?>
          <a class="nav-link" href="/">Zurück zur Übersicht</a>
        <?php } ?>
   </div>
</nav>
