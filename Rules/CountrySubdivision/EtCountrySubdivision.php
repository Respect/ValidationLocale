<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Ethiopia country subdivision.
 *
 * ISO 3166-1 alpha-2: ET
 *
 * @link http://www.geonames.org/ET/administrative-division-ethiopia.html
 */
class EtCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AA', // Addis Ababa
        'AF', // Afar
        'AM', // Amhara
        'BE', // Benishangul-Gumaz
        'DD', // Dire Dawa
        'GA', // Gambela
        'HA', // Hariai
        'OR', // Oromia
        'SN', // Southern Nations - Nationalities and Peoples Region
        'SO', // Somali
        'TI', // Tigray
    );

    public $compareIdentical = true;
}
