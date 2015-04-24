<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Kiribati country subdivision.
 *
 * ISO 3166-1 alpha-2: KI
 *
 * @link http://www.geonames.org/KI/administrative-division-kiribati.html
 */
class KiCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'G', // Gilbert Islands
        'L', // Line Islands
        'P', // Phoenix Islands
    );

    public $compareIdentical = true;
}
