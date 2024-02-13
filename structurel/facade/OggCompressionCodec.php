<?php 

require_once('./ICompressionCodec.php');

class OggCompressionCodec implements ICompressionCodec {
    public function compress($buffer): string {
        return "Ogg Compressed Data";
    }
}