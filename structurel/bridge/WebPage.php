<?php 

abstract class WebPage {
    protected $theme;
 
    public function __construct(ITheme $theme) {
        $this->theme = $theme;
    }

    abstract public function getContent();
}
