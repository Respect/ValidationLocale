<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Syria country subdivision.
 *
 * ISO 3166-1 alpha-2: SY
 *
 * @link http://www.geonames.org/SY/administrative-division-syria.html
 */
class SyCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'DI', // Dimashq
        'DR', // Dara
        'DY', // Dayr az Zawr
        'HA', // Al Hasakah
        'HI', // Hims
        'HL', // Halab
        'HM', // Hamah
        'ID', // Idlib
        'LA', // Al Ladhiqiyah
        'QU', // Al Qunaytirah
        'RA', // Ar Raqqah
        'RD', // Rif Dimashq
        'SU', // As Suwayda
        'TA', // Tartus
    );

    public $compareIdentical = true;
}
