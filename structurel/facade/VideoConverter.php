<?php 

require_once('./MPEG4CompressionCodec.php');
require_once('./OggCompressionCodec.php');
require_once('./BitrateReader.php');
require_once('./CodecFactory.php');
require_once('./VideoFile.php');
require_once('./AudioMix.php');

class VideoConverter {
    public function convert($filename, $format) {
        $file = new VideoFile($filename);
        $sourceCodec = (new CodecFactory())->extract($file);
        
        if ($format == "mp4") {
            $destinationCodec = new MPEG4CompressionCodec();
        } else {
            $destinationCodec = new OggCompressionCodec();
        }

        $buffer = BitrateReader::read($filename, $sourceCodec);
        $result = BitrateReader::convert($buffer, $destinationCodec);
        $result = (new AudioMixer())->fix($result);

        return new VideoFile($result);
    }
}
