<?php

    $chickens = 10;
    $cows = 5;
    $pigs = 8;

    //instantiate farm class
    $myFarm = new Farm(10, 5, 8);

    // Calculate the total number of legs on the farm using the total legs function in the class
    $totalLegs = $myFarm->totalLegs();

    echo "Total number of legs on the farm: <b>".$totalLegs."</b>";

    class Farm {
        private $chickens;
        private $cows;
        private $pigs;

        public function __construct($chickens, $cows, $pigs) {
            $this->chickens = $chickens;
            $this->cows = $cows;
            $this->pigs = $pigs;
        }

        public function totalLegs() {
            $chickenLegs = $this->chickens * 2;
            $cowLegs = $this->cows * 4;
            $pigLegs = $this->pigs * 4;

            $totalLegs = $chickenLegs + $cowLegs + $pigLegs;

            return $totalLegs;
        }
    }


?>
