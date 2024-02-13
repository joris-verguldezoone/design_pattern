<?php 

require_once('./WebPage.php');

class HomePage extends WebPage {
    public function getContent() {
        return "<p style='color:".$this->theme->getColor()."'> Homepage content with " . $this->theme->getColor() . " theme.</p>";
    }
}