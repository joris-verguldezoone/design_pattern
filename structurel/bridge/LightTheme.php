<?php 

require_once('./ITheme.php');

class LightTheme implements ITheme {
    public function getColor() {
        return 'lightcoral';
    }
}
