<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Slovakia country subdivision.
 *
 * ISO 3166-1 alpha-2: SK
 *
 * @link http://www.geonames.org/SK/administrative-division-slovakia.html
 */
class SkCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BC', // Banskobystricky
        'BL', // Bratislavsky
        'KI', // Kosicky
        'NI', // Nitriansky
        'PV', // Presovsky
        'TA', // Trnavsky
        'TC', // Trenciansky
        'ZI', // Zilinsky
    );

    public $compareIdentical = true;
}
