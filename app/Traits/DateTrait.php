<?php

namespace App\Traits;

use DateTime;

trait DateTrait {
    public function convertNormal($dateString){
        // $dateString = '03/02/2023';

        $date = DateTime::createFromFormat('m/d/Y', $dateString);
        $formattedDate = $date->format('Y-m-d');

        return $formattedDate; // Output: 2023-03-02
    }
}