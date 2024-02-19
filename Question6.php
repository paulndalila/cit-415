<?php
    class Compressor {
        function compress($chararacters) {
            $compressed = '';
            $count = 1;
            $length = count($chararacters);
    
            for ($i = 0; $i < $length; $i++) {
                if ($i < $length - 1 && $chararacters[$i] === $chararacters[$i + 1]) {
                    $count++;
                } else {
                    if ($count > 1) {
                        $compressed .= $chararacters[$i - 1] . $count;
                    } else {
                        $compressed .= $chararacters[$i];
                    }
                    $count = 1;
                }
            }
            return $compressed;
        }
    }
    
    //instatiate class
    $compress = new Compressor();    
    $chars = ["a", "a", "b", "b", "c", "c", "c"];
    echo $compress->compress($chars);
?>