<?php

// Return the appropriate coordinates for the SVG viewBox attribute
function getCoordinates($country)
{
    switch ($country) {

        // Regions
        case "Africa":
            echo "170 70 300 333.15";
            break;
        case "Americas":
            echo "170 70 300 333.15";
            break;
        case "Asia":
            echo "170 70 300 333.15";
            break;
        case "Australasia":
            echo "170 70 300 333.15";
            break;
        case "Europe":
            echo "170 70 300 333.15";
            break;
        case "Middle-East":
            echo "170 70 300 333.15";
            break;

        // Countries/territories
        case "Aden":
            echo "0 0 0 0";
            break;
        case "Albania":
            echo "0 0 0 0";
            break;
        case "Anglo-Egyptian Sudan":
            echo "0 0 0 0";
            break;
        case "Ascension Island":
            echo "0 0 0 0";
            break;
        case "Australia":
            echo "0 0 0 0";
            break;
        case "Austria-Hungary":
            echo "0 0 0 0";
            break;
        case "Barbados":
            echo "0 0 0 0";
            break;
        case "Belgium":
            echo "0 0 0 0";
            break;
        case "Bermuda":
            echo "0 0 0 0";
            break;
        case "Britain":
            echo "0 0 0 0";
            break;
        case "British East Africa":
            echo "0 0 0 0";
            break;
        case "British Gold Coast":
            echo "0 0 0 0";
            break;
        case "British Guiana":
            echo "0 0 0 0";
            break;
        case "British Honduras":
            echo "0 0 0 0";
            break;
        case "British New Guinea and German New Guinea":
            echo "0 0 0 0";
            break;
        case "British North Borneo and Sarawak":
            echo "0 0 0 0";
            break;
        case "British Somaliland":
            echo "0 0 0 0";
            break;
        case "Bulgaria":
            echo "0 0 0 0";
            break;
        case "Burma":
            echo "0 0 0 0";
            break;
        case "Canada":
            echo "0 0 0 0";
            break;
        case "Ceylon":
            echo "0 0 0 0";
            break;
        case "Cocos (Keeling) Islands":
            echo "0 0 0 0";
            break;
        case "Cyprus":
            echo "0 0 0 0";
            break;
        case "Denmark":
            echo "0 0 0 0";
            break;
        case "Egypt":
            echo "0 0 0 0";
            break;
        case "Falkland Islands":
            echo "0 0 0 0";
            break;
        case "France":
            echo "0 0 0 0";
            break;
        case "Germany":
            echo "230 105 120 333.15";
            break;
        case "Greece":
            echo "0 0 0 0";
            break;
        case "Gibraltar":
            echo "0 0 0 0";
            break;
        case "Hong Kong and Wei-hai-wei":
            echo "0 0 0 0";
            break;
        case "India":
            echo "0 0 0 0";
            break;
        case "Italy":
            echo "0 0 0 0";
            break;
        case "Jamaica":
            echo "0 0 0 0";
            break;
        case "Leeward Islands":
            echo "0 0 0 0";
            break;
        case "Lichtenstein":
            echo "0 0 0 0";
            break;
        case "Luxembourg":
            echo "0 0 0 0";
            break;
        case "Malaya":
            echo "0 0 0 0";
            break;
        case "Maldives":
            echo "0 0 0 0";
            break;
        case "Malta":
            echo "0 0 0 0";
            break;
        case "Mauritius":
            echo "0 0 0 0";
            break;
        case "Montenegro":
            echo "0 0 0 0";
            break;
        case "Netherlands":
            echo "0 0 0 0";
            break;
        case "New Zealand":
            echo "0 0 0 0";
            break;
        case "Newfoundland":
            echo "0 0 0 0";
            break;
        case "Nigeria":
            echo "0 0 0 0";
            break;
        case "Northern Rhodesia":
            echo "0 0 0 0";
            break;
        case "Norway":
            echo "0 0 0 0";
            break;
        case "Nyasaland":
            echo "0 0 0 0";
            break;
        case "Pacific Islands":
            echo "0 0 0 0";
            break;
        case "Portugal":
            echo "0 0 0 0";
            break;
        case "Russia":
            echo "0 0 0 0";
            break;
        case "Roumania":
            echo "0 0 0 0";
            break;
        case "Seychelles":
            echo "0 0 0 0";
            break;
        case "Serbia":
            echo "0 0 0 0";
            break;
        case "Sierra Leone":
            echo "0 0 0 0";
            break;
        case "Straits Settlements":
            echo "0 0 0 0";
            break;
        case "South Africa":
            echo "0 0 0 0";
            break;
        case "South African High Commission Territories":
            echo "0 0 0 0";
            break;
        case "Southern Rhodesia":
            echo "0 0 0 0";
            break;
        case "St Helena":
            echo "0 0 0 0";
            break;
        case "Sweden":
            echo "0 0 0 0";
            break;
        case "Switzerland":
            echo "0 0 0 0";
            break;
        case "The Bahamas":
            echo "0 0 0 0";
            break;
        case "The Gambia":
            echo "0 0 0 0";
            break;
        case "Trinidad and Tobago":
            echo "0 0 0 0";
            break;
        case "Uganda":
            echo "0 0 0 0";
            break;
        case "Winward Islands":
            echo "0 0 0 0";
            break;
        case "Zanzibar":
            echo "0 0 0 0";
            break;

        //Default is world view
        default:
            echo "0 0 570 333.15";
    }
}

?>