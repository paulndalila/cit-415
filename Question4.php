<?php

    // Example: Total slices = 8, Recipients = 4, Slices = 2 per person
    $pieSplitter = new PieSplitter(8, 4, 2);

    // Check if it's possible to split the pie fairly
    $result = $pieSplitter->isFairSplit();
    echo $result;

    class PieSplitter {
        private $totalSlices;
        private $Recipients;
        private $slicesPerPerson;

        public function __construct($totalSlices, $Recipients, $slicesPerPerson) {
            $this->totalSlices = $totalSlices;
            $this->Recipients = $Recipients;
            $this->slicesPerPerson = $slicesPerPerson;
        }

        public function isFairSplit() {
            $totalNeededSlices = $this->Recipients * $this->slicesPerPerson;

            if ($totalNeededSlices > $this->totalSlices) {
                return "Not enough slices to make a fair split.";
            }

            if ($this->totalSlices % $this->Recipients == 0 && $this->totalSlices % $this->slicesPerPerson == 0) {
                return "It's possible to split the pie fairly.";
            } else {
                return "It's not possible to split the pie fairly.";
            }
        }
    }

?>
