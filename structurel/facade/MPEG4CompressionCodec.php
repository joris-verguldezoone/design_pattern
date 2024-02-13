<?php 

require_once('./ICompressionCodec.php');

class MPEG4CompressionCodec implements ICompressionCodec {
    public function compress($buffer): string {
        return "MPEG4 Compressed Data";
    }
}