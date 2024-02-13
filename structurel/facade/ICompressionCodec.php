<?php 

interface ICompressionCodec {
    public function compress($buffer): string;
}
