<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Svalbard and Jan Mayen country subdivision.
 *
 * ISO 3166-1 alpha-2: SJ
 *
 * @link http://www.geonames.org/SJ/administrative-division-svalbard-and-jan-mayen.html
 */
class SjCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        '21', // Svalbard
        '22', // Jan Mayen
    );

    public $compareIdentical = true;
}
