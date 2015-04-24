<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Tajikistan country subdivision.
 *
 * ISO 3166-1 alpha-2: TJ
 *
 * @link http://www.geonames.org/TJ/administrative-division-tajikistan.html
 */
class TjCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'GB', // Gorno-Badakhstan
        'KT', // Khatlon
        'SU', // Sughd
    );

    public $compareIdentical = true;
}
