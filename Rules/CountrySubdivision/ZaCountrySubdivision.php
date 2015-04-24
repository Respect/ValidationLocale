<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for South Africa country subdivision.
 *
 * ISO 3166-1 alpha-2: ZA
 *
 * @link http://www.geonames.org/ZA/administrative-division-south-africa.html
 */
class ZaCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'EC', // Eastern Cape
        'FS', // Free State
        'GP', // Gauteng
        'LP', // Limpopo
        'MP', // Mpumalanga
        'NC', // Northern Cape
        'NW', // North West
        'WC', // Western Cape
        'ZN', // KwaZulu-Natal
    );

    public $compareIdentical = true;
}
