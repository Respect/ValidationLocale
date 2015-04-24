<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Haiti country subdivision.
 *
 * ISO 3166-1 alpha-2: HT
 *
 * @link http://www.geonames.org/HT/administrative-division-haiti.html
 */
class HtCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AR', // Artibonite
        'CE', // Centre
        'GA', // Grand'Anse
        'ND', // Nord
        'NE', // Nord-Est
        'NO', // Nord-Ouest
        'OU', // Ouest
        'SD', // Sud
        'SE', // Sud-Est
    );

    public $compareIdentical = true;
}
