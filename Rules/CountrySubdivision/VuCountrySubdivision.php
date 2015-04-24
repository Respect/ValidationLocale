<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Vanuatu country subdivision.
 *
 * ISO 3166-1 alpha-2: VU
 *
 * @link http://www.geonames.org/VU/administrative-division-vanuatu.html
 */
class VuCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'MAP', // Malampa
        'PAM', // Penama
        'SAM', // Sanma
        'SEE', // Shefa
        'TAE', // Tafea
        'TOB', // Torba
    );

    public $compareIdentical = true;
}
