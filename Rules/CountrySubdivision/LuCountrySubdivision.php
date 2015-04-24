<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Luxembourg country subdivision.
 *
 * ISO 3166-1 alpha-2: LU
 *
 * @link http://www.geonames.org/LU/administrative-division-luxembourg.html
 */
class LuCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'D', // Diekirch
        'G', // Grevenmacher
        'L', // Luxembourg
    );

    public $compareIdentical = true;
}
