<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Guyana country subdivision.
 *
 * ISO 3166-1 alpha-2: GY
 *
 * @link http://www.geonames.org/GY/administrative-division-guyana.html
 */
class GyCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BA', // Barima-Waini
        'CU', // Cuyuni-Mazaruni
        'DE', // Demerara-Mahaica
        'EB', // East Berbice-Corentyne
        'ES', // Essequibo Islands-West Demerara
        'MA', // Mahaica-Berbice
        'PM', // Pomeroon-Supenaam
        'PT', // Potaro-Siparuni
        'UD', // Upper Demerara-Berbice
        'UT', // Upper Takutu-Upper Essequibo
    );

    public $compareIdentical = true;
}
