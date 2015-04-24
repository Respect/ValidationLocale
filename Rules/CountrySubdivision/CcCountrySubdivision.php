<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Cocos [Keeling] Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: CC
 *
 * @link http://www.geonames.org/CC/administrative-division-cocos-islands.html
 */
class CcCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'D', // Direction Island
        'H', // Home Island
        'O', // Horsburgh Island
        'S', // South Island
        'W', // West Island
    );

    public $compareIdentical = true;
}
