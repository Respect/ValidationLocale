<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Tokelau country subdivision.
 *
 * ISO 3166-1 alpha-2: TK
 *
 * @link http://www.geonames.org/TK/administrative-division-tokelau.html
 */
class TkCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'A', // Atafu
        'F', // Fakaofo
        'N', // Nukunonu
    );

    public $compareIdentical = true;
}
