<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Ghana country subdivision.
 *
 * ISO 3166-1 alpha-2: GH
 *
 * @link http://www.geonames.org/GH/administrative-division-ghana.html
 */
class GhCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AA', // Greater Accra Region
        'AH', // Ashanti Region
        'BA', // Brong-Ahafo Region
        'CP', // Central Region
        'EP', // Eastern Region
        'NP', // Northern Region
        'TV', // Volta Region
        'UE', // Upper East Region
        'UW', // Upper West Region
        'WP', // Western Region
    );

    public $compareIdentical = true;
}
