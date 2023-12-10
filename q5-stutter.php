<?php

    $stutteredWord = WordStutter::stutterWord("incredible");
    echo $stutteredWord;

    class WordStutter {
        //static stutterWord function
        public static function stutterWord($word) {
            if (strlen($word) < 2) {
                return "Word is too short to stutter.";
            }

            $firstTwoLetters = substr($word, 0, 2);
            return $firstTwoLetters . "..." . $firstTwoLetters . "..." . $word . "?";
        }
    }

?>