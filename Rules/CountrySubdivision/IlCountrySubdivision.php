<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Israel country subdivision.
 *
 * ISO 3166-1 alpha-2: IL
 *
 * @link http://www.geonames.org/IL/administrative-division-israel.html
 */
class IlCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'D', // Southern
        'HA', // Haifa
        'JM', // Jerusalem
        'M', // Central
        'TA', // Tel Aviv
        'Z', // Northern
    );

    public $compareIdentical = true;
}
