<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Swaziland country subdivision.
 *
 * ISO 3166-1 alpha-2: SZ
 *
 * @link http://www.geonames.org/SZ/administrative-division-swaziland.html
 */
class SzCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'HH', // Hhohho
        'LU', // Lubombo
        'MA', // Manzini
        'SH', // Shishelweni
    );

    public $compareIdentical = true;
}
