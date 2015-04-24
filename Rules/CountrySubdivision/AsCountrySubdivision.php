<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for American Samoa country subdivision.
 *
 * ISO 3166-1 alpha-2: AS
 *
 * @link http://www.geonames.org/AS/administrative-division-american-samoa.html
 */
class AsCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'E', // Eastern
        'M', // Manu'a
        'R', // Rose Island
        'S', // Swains Island
        'W', // Western
    );

    public $compareIdentical = true;
}
