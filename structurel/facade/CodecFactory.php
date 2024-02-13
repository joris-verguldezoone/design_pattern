<?php 

require_once('./OggCompressionCodec.php');

class CodecFactory {
    public function extract($file) {
        return new OggCompressionCodec(); // Pour l'exemple, retourne un codec Ogg
    }
}