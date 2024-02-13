<?php 

require_once('./ITheme.php');

class DarkTheme implements ITheme {
    public function getColor() {
        return 'darkslategray';
    }
}
