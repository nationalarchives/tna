<?php

    // Return the appropriate coordinates for the SVG viewBox attribute
    function getCoordinates($country)
    {
        switch ($country) {
            case "Germany":
                return "230 105 120 333.15";
                break;
            default:
                return "170 70 300 333.15";
        }
    }

?>