<?php
// Return the appropriate coordinates for the SVG viewBox attribute
function getCoordinates($country, $value)
{
    // REGIONS

    // World
    if ($country == "World") {
        if ($value == 'viewbox') {
            return "0 0 679.07 333.15";
        } else {
            return "32";
        }
    }

    // Africa
    if ($country == "Africa") {
        if ($value == 'viewbox') {
            return "140 145 390 393.15";
        } else {
            return "35.5";
        }
    }
    // North America
    if ($country == "North America") {
        if ($value == 'viewbox') {
            return "0 10 390 393.15";
        } else {
            return "47.5";
        }
    }
    // South America
    if ($country == "South America") {
        if ($value == 'viewbox') {
            return "30 180 390 393.15";
        } else {
            return "39.5";
        }
    }
    // The Caribbean
    if ($country == "The Caribbean") {
        if ($value == 'viewbox') {
            return "150 155 100 393.15";
        } else {
            return "47";
        }
    }
    // Asia
    if ($country == "Asia") {
        if ($value == 'viewbox') {
            return "250 100 390 393.15";
        } else {
            return "34.5";
        }
    }
    // Australasia
    if ($country == "Australasia") {
        if ($value == 'viewbox') {
            return "320 200 390 393.15";
        } else {
            return "31.5";
        }
    }
    // Europe
    if ($country == "Europe") {
        if ($value == 'viewbox') {
            return "190 70 300 333.15";
        } else {
            return "30";
        }
    }
    // Middle East
    if ($country == "Middle East") {
        if ($value == 'viewbox') {
            return "190 130 390 393.15";
        } else {
            return "28.5";
        }
    }
    // COUNTRIES/TERRITORIES
    // Aden
    if ($country == "Aden") {
        if ($value == 'viewbox') {
            return "290 160 190 393.15";
        } else {
            return "26";
        }
    }
    // Albania
    if ($country == "Albania") {
        if ($value == 'viewbox') {
            return "285 130 120 393.15";
        } else {
            return "26";
        }
    }
    // Anglo-Egyptian Sudan
    if ($country == "Anglo-Egyptian Sudan") {
        if ($value == 'viewbox') {
            return "255 165 220 393.15";
        } else {
            return "26";
        }
    }
    // Ascension Island
    if ($country == "Ascension Island") {
        if ($value == 'viewbox') {
            return "240 215 120 393.15";
        } else {
            return "28";
        }
    }
    // Australia
    if ($country == "Australia") {
        if ($value == 'viewbox') {
            return "320 215 390 393.15";
        } else {
            return "26";
        }
    }
    // Austria-Hungary
    if ($country == "Austria-Hungary") {
        if ($value == 'viewbox') {
            return "271 117 140 393.15";
        } else {
            return "26";
        }
    }
    // Barbados
    if ($country == "Barbados") {
        if ($value == 'viewbox') {
            return "205 188 40 393.15";
        } else {
            return "26";
        }
    }
    // Belgium
    if ($country == "Belgium") {
        if ($value == 'viewbox') {
            return "275 112 100 393.15";
        } else {
            return "26";
        }
    }
    // Bermuda
    if ($country == "Bermuda") {
        if ($value == 'viewbox') {
            return "185 155 70 393.15";
        } else {
            return "30";
        }
    }
    // Britain
    if ($country == "Britain") {
        if ($value == 'viewbox') {
            return "252 104 120 393.15";
        } else {
            return "26";
        }
    }
    // British East Africa
    if ($country == "British East Africa") {
        if ($value == 'viewbox') {
            return "277 185 200 393.15";
        } else {
            return "26";
        }
    }
    // British Gold Coast
    if ($country == "British Gold Coast") {
        if ($value == 'viewbox') {
            return "217 176 200 393.15";
        } else {
            return "26";
        }
    }
    // British Guiana
    if ($country == "British Guiana") {
        if ($value == 'viewbox') {
            return "147 186 160 393.15";
        } else {
            return "26";
        }
    }
    // British Honduras
    if ($country == "British Honduras") {
        if ($value == 'viewbox') {
            return "130 173 100 393.15";
        } else {
            return "26";
        }
    }
    // British New Guinea and German New Guinea
    if ($country == "British New Guinea and German New Guinea") {
        if ($value == 'viewbox') {
            return "480 210 120 393.15";
        } else {
            return "26";
        }
    }
    // British North Borneo and Sarawak
    if ($country == "British North Borneo and Sarawak") {
        if ($value == 'viewbox') {
            return "437 195 120 393.15";
        } else {
            return "26";
        }
    }
    // British Somaliland
    if ($country == "British Somaliland") {
        if ($value == 'viewbox') {
            return "297 175 180 393.15";
        } else {
            return "26";
        }
    }
    // Bulgaria
    if ($country == "Bulgaria") {
        if ($value == 'viewbox') {
            return "295 127 120 393.15";
        } else {
            return "26";
        }
    }
    // Burma
    if ($country == "Burma") {
        if ($value == 'viewbox') {
            return "372 160 190 393.15";
        } else {
            return "26";
        }
    }
    // Canada
    if ($country == "Canada") {
        if ($value == 'viewbox') {
            return "0 0 390 393.15";
        } else {
            return "41";
        }
    }
    // Ceylon
    if ($country == "Ceylon") {
        if ($value == 'viewbox') {
            return "372 185 140 393.15";
        } else {
            return "26";
        }
    }
    // Cocos (Keeling) Islands
    if ($country == "Cocos (Keeling) Islands") {
        if ($value == 'viewbox') {
            return "410 215 120 393.15";
        } else {
            return "26";
        }
    }
    // Cyprus
    if ($country == "Cyprus") {
        if ($value == 'viewbox') {
            return "322 145 90 393.15";
        } else {
            return "26";
        }
    }
    // Denmark
    if ($country == "Denmark") {
        if ($value == 'viewbox') {
            return "285 102 90 393.15";
        } else {
            return "26";
        }
    }
    // Egypt
    if ($country == "Egypt") {
        if ($value == 'viewbox') {
            return "255 142 220 393.15";
        } else {
            return "26";
        }
    }
    // Falkland Islands
    if ($country == "Falkland Islands") {
        if ($value == 'viewbox') {
            return "147 286 160 393.15";
        } else {
            return "26";
        }
    }
    // France
    if ($country == "France") {
        if ($value == 'viewbox') {
            return "260 118 120 333.15";
        } else {
            return "26";
        }
    }
    // Germany
    if ($country == "Germany") {
        if ($value == 'viewbox') {
            return "278 108 120 333.15";
        } else {
            return "26";
        }
    }
    // Greece
    if ($country == "Greece") {
        if ($value == 'viewbox') {
            return "292 135 120 393.15";
        } else {
            return "26";
        }
    }
    // Gibraltar
    if ($country == "Gibraltar") {
        if ($value == 'viewbox') {
            return "290 148 40 333.15";
        } else {
            return "26";
        }
    }
    // Hong Kong and Wei-hai-wei
    if ($country == "Hong Kong and Wei-Hai-Wei") {
        if ($value == 'viewbox') {
            return "441 145 120 393.15";
        } else {
            return "30";
        }
    }
    // India
    if ($country == "India") {
        if ($value == 'viewbox') {
            return "342 147 190 393.15";
        } else {
            return "32";
        }
    }
    // Italy
    if ($country == "Italy") {
        if ($value == 'viewbox') {
            return "272 127 120 393.15";
        } else {
            return "26";
        }
    }
    // Jamaica
    if ($country == "Jamaica") {
        if ($value == 'viewbox') {
            return "157 173 80 393.15";
        } else {
            return "26";
        }
    }
    // Leeward Islands
    if ($country == "Leeward Islands") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Lichtenstein
    if ($country == "Lichtenstein") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Luxembourg
    if ($country == "Luxembourg") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Malaya
    if ($country == "Malaya") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Maldives
    if ($country == "Maldives") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Malta
    if ($country == "Malta") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Mauritius
    if ($country == "Mauritius") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Montenegro
    if ($country == "Montenegro") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Netherlands
    if ($country == "Netherlands") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // New Zealand
    if ($country == "New Zealand") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Newfoundland
    if ($country == "Newfoundland") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Nigeria
    if ($country == "Nigeria") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Northern Rhodesia
    if ($country == "Northern Rhodesia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Norway
    if ($country == "Northern Rhodesia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Nyasaland
    if ($country == "Nyasaland") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Pacific Islands
    if ($country == "Pacific Islands") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Portugal
    if ($country == "Portugal") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Russia
    if ($country == "Russia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Roumania
    if ($country == "Roumania") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Serbia
    if ($country == "Serbia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Sierra Leone
    if ($country == "Sierra Leone") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Seychelles
    if ($country == "Seychelles") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Straits Settlements
    if ($country == "Straits Settlements") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // South Africa
    if ($country == "South Africa") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // South African High Commission Territories
    if ($country == "South African High Commission Territories") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Southern Rhodesia
    if ($country == "Southern Rhodesia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // St Helena
    if ($country == "St Helena") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Sweden
    if ($country == "Sweden") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Switzerland
    if ($country == "Switzerland") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // The Bahamas
    if ($country == "The Bahamas") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // The Gambia
    if ($country == "The Gambia") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Trinidad and Tobago
    if ($country == "Trinidad and Tobago") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Uganda
    if ($country == "Uganda") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Winward Islands
    if ($country == "Winward Islands") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
    // Zanzibar
    if ($country == "Zanzibar") {
        if ($value == 'viewbox') {
            return "170 70 300 333.15";
        } else {
            return "26";
        }
    }
}

?>