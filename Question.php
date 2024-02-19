<?php

    class CalculateDifference {
        private $startDate;
        private $endDate;

        public function __construct($startDate, $endDate) {
            $this->startDate = new DateTime($startDate);
            $this->endDate = new DateTime($endDate);
        }

        public function getDateDifference() {
            $theDifference = $this->startDate->diff($this->endDate);
            return $theDifference;
        }
    }

    
    $startDate = '1981-11-03';
    $endDate = '2013-09-04';

    //instatiate class
    $dateDifferenceCalculator = new CalculateDifference($startDate, $endDate);

    // Getting the difference and display
    $date_difference = $dateDifferenceCalculator->getDateDifference();
    echo "The date difference between <b>".$startDate."</b> and <b>".$endDate."</b> is: <b>".$date_difference->y." years, ".$date_difference->m." months, ".$date_difference->d." days</b>";


?>
