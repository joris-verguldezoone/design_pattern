<?php 

class VideoFile {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function save() {
        echo "Saved Video File: " . $this->filename;
    }
}