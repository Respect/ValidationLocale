<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Solomon Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: SB
 *
 * @link http://www.geonames.org/SB/administrative-division-solomon-islands.html
 */
class SbCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'CE', // Central
        'CH', // Choiseul
        'CT', // Capital Territory
        'GU', // Guadalcanal
        'IS', // Isabel
        'MK', // Makira
        'ML', // Malaita
        'RB', // Rennell and Bellona
        'TE', // Temotu
        'WE', // Western
    );

    public $compareIdentical = true;
}
