<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Lithuania country subdivision.
 *
 * ISO 3166-1 alpha-2: LT
 *
 * @link http://www.geonames.org/LT/administrative-division-lithuania.html
 */
class LtCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AL', // Alytus
        'KL', // Klaipeda
        'KU', // Kaunas
        'MR', // Marijampole
        'PN', // Panevezys
        'SA', // Siauliai
        'TA', // Taurage
        'TE', // Telsiai
        'UT', // Utena
        'VL', // Vilnius
    );

    public $compareIdentical = true;
}
