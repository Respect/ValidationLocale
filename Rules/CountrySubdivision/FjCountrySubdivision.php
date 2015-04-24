<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Fiji country subdivision.
 *
 * ISO 3166-1 alpha-2: FJ
 *
 * @link http://www.geonames.org/FJ/administrative-division-fiji.html
 */
class FjCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'C', // Central Division
        'E', // Eastern Division
        'N', // Northern Division
        'R', // Rotuma
        'W', // Western Division
    );

    public $compareIdentical = true;
}
