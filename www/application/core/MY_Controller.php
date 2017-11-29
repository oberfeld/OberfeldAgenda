<?php
/**
 * My controller provides HTML5 display
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */
class MY_Controller extends CI_Controller {
    /**
     * Show HTML content with optional title
     * 
     * @param string $content
     * @param string $title
     */
    protected function display($content, $title = NULL) {
        $this->load->view('html5', ['content' => $content, 'title' => $title]);
    }
}