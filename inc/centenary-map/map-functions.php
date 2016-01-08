<?php

// Return the appropriate coordinates for the SVG viewBox attribute
function getCoordinates($country)
{
    switch ($country) {

        // Regions
        case "Africa":
            return "120 150 390 393.15";
            break;
        case "North America":
            return "170 70 500 333.15";
            break;
        case "South America":
            return "0 190 410 333.15";
            break;
        case "The Caribbean":
            return "0 300 700 333.15";
            break;
        case "Asia":
            return "170 70 300 333.15";
            break;
        case "Australasia":
            return "170 70 300 333.15";
            break;
        case "Europe":
            return "170 70 300 333.15";
            break;
        case "Middle-East":
            return "170 70 300 333.15";
            break;

        // Countries/territories
        case "Aden":
            return "0 0 0 0";
            break;
        case "Albania":
            return "0 0 0 0";
            break;
        case "Anglo-Egyptian Sudan":
            return "0 0 0 0";
            break;
        case "Ascension Island":
            return "0 0 0 0";
            break;
        case "Australia":
            return "0 0 0 0";
            break;
        case "Austria-Hungary":
            return "0 0 0 0";
            break;
        case "Barbados":
            return "0 0 0 0";
            break;
        case "Belgium":
            return "0 0 0 0";
            break;
        case "Bermuda":
            return "0 0 0 0";
            break;
        case "Britain":
            return "0 0 0 0";
            break;
        case "British East Africa":
            return "0 0 0 0";
            break;
        case "British Gold Coast":
            return "0 0 0 0";
            break;
        case "British Guiana":
            return "0 0 0 0";
            break;
        case "British Honduras":
            return "0 0 0 0";
            break;
        case "British New Guinea and German New Guinea":
            return "0 0 0 0";
            break;
        case "British North Borneo and Sarawak":
            return "0 0 0 0";
            break;
        case "British Somaliland":
            return "0 0 0 0";
            break;
        case "Bulgaria":
            return "0 0 0 0";
            break;
        case "Burma":
            return "0 0 0 0";
            break;
        case "Canada":
            return "0 0 0 0";
            break;
        case "Ceylon":
            return "0 0 0 0";
            break;
        case "Cocos (Keeling) Islands":
            return "0 0 0 0";
            break;
        case "Cyprus":
            return "0 0 0 0";
            break;
        case "Denmark":
            return "0 0 0 0";
            break;
        case "Egypt":
            return "0 0 0 0";
            break;
        case "Falkland Islands":
            return "0 0 0 0";
            break;
        case "France":
            return "0 0 0 0";
            break;
        case "Germany":
            return "230 105 120 333.15";
            break;
        case "Greece":
            return "0 0 0 0";
            break;
        case "Gibraltar":
            return "0 0 0 0";
            break;
        case "Hong Kong and Wei-hai-wei":
            return "0 0 0 0";
            break;
        case "India":
            return "0 0 0 0";
            break;
        case "Italy":
            return "0 0 0 0";
            break;
        case "Jamaica":
            return "0 0 0 0";
            break;
        case "Leeward Islands":
            return "0 0 0 0";
            break;
        case "Lichtenstein":
            return "0 0 0 0";
            break;
        case "Luxembourg":
            return "0 0 0 0";
            break;
        case "Malaya":
            return "0 0 0 0";
            break;
        case "Maldives":
            return "0 0 0 0";
            break;
        case "Malta":
            return "0 0 0 0";
            break;
        case "Mauritius":
            return "0 0 0 0";
            break;
        case "Montenegro":
            return "0 0 0 0";
            break;
        case "Netherlands":
            return "0 0 0 0";
            break;
        case "New Zealand":
            return "0 0 0 0";
            break;
        case "Newfoundland":
            return "0 0 0 0";
            break;
        case "Nigeria":
            return "0 0 0 0";
            break;
        case "Northern Rhodesia":
            return "0 0 0 0";
            break;
        case "Norway":
            return "0 0 0 0";
            break;
        case "Nyasaland":
            return "0 0 0 0";
            break;
        case "Pacific Islands":
            return "0 0 0 0";
            break;
        case "Portugal":
            return "0 0 0 0";
            break;
        case "Russia":
            return "0 0 0 0";
            break;
        case "Roumania":
            return "0 0 0 0";
            break;
        case "Seychelles":
            return "0 0 0 0";
            break;
        case "Serbia":
            return "0 0 0 0";
            break;
        case "Sierra Leone":
            return "0 0 0 0";
            break;
        case "Straits Settlements":
            return "0 0 0 0";
            break;
        case "South Africa":
            return "0 0 0 0";
            break;
        case "South African High Commission Territories":
            return "0 0 0 0";
            break;
        case "Southern Rhodesia":
            return "0 0 0 0";
            break;
        case "St Helena":
            return "0 0 0 0";
            break;
        case "Sweden":
            return "0 0 0 0";
            break;
        case "Switzerland":
            return "0 0 0 0";
            break;
        case "The Bahamas":
            return "0 0 0 0";
            break;
        case "The Gambia":
            return "0 0 0 0";
            break;
        case "Trinidad and Tobago":
            return "0 0 0 0";
            break;
        case "Uganda":
            return "0 0 0 0";
            break;
        case "Winward Islands":
            return "0 0 0 0";
            break;
        case "Zanzibar":
            return "0 0 0 0";
            break;

        //Default is world view
        default:
            return "0 0 570 333.15";
    }
}

?>