<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Saint Helena country subdivision.
 *
 * ISO 3166-1 alpha-2: SH
 *
 * @link http://www.geonames.org/SH/administrative-division-saint-helena.html
 */
class ShCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AC', // Ascension
        'HL', // Saint Helena
        'TA', // Tristan da Cunha
    );

    public $compareIdentical = true;
}
