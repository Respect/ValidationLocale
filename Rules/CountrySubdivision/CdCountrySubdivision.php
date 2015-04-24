<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Democratic Republic of the Congo country subdivision.
 *
 * ISO 3166-1 alpha-2: CD
 *
 * @link http://www.geonames.org/CD/administrative-division-democratic-republic-of-the-congo.html
 */
class CdCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BC', // Bas-Congo
        'BN', // Bandundu
        'EQ', // Equateur
        'KA', // Katanga
        'KE', // Kasai-Oriental
        'KN', // Kinshasa
        'KW', // Kasai-Occidental
        'MA', // Maniema
        'NK', // Nord-Kivu
        'OR', // Orientale
        'SK', // Sud-Kivu
    );

    public $compareIdentical = true;
}
