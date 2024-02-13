<?php 

require_once('./WebPage.php');

class ContactPage extends WebPage {
    public function getContent() {
        return "<p style='color:".$this->theme->getColor()."'> Contact page content with " . $this->theme->getColor() . " theme.</p>";
    }
}