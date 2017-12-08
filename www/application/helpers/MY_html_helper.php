<?php
/**
 * HTMLhelper
 * 
 * Requires the URL helper to be loaded.
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */

 /**
  * Generate HTML script tag
  *
  * @param string $url
  * @return string
  */
function script_tag($url) {
    if(!function_exists('base_url')) throw new Exception("Load URL helper before using HTML helper.");

    $script = '<script src="' . base_url($url) . '" type="text/javascript"></script>';
}
