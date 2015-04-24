<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Micronesia country subdivision.
 *
 * ISO 3166-1 alpha-2: FM
 *
 * @link http://www.geonames.org/FM/administrative-division-micronesia.html
 */
class FmCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'KSA', // Kosrae
        'PNI', // Pohnpei
        'TRK', // Chuuk
        'YAP', // Yap
    );

    public $compareIdentical = true;
}
