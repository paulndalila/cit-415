<?php

    $numbers = [40, 40, 30, 20, 30, 30, 20, 30, 30];

    $result = getMajorityElementFrom($numbers);

    echo "The majority element in the array is: <b>".$result."</b>";

    //function to calculate the majority element in an array
    function getMajorityElementFrom($arr) {
        $count = 0;
        $candidate = null;

        foreach ($arr as $element) {
            if ($count == 0) {
                $candidate = $element;
                $count = 1;
            } else {
                if ($element == $candidate) {
                    $count++;
                } else {
                    $count--;
                }
            }
        }

        // Checking if the candidate is a majority element
        $count = 0;
        foreach ($arr as $element) {
            if ($element == $candidate) {
                $count++;
            }
        }

        $arraySize = count($arr);
        if ($count > $arraySize / 2) {
            return $candidate;
        } else {
            return "No majority element found";
        }
    }

?>
