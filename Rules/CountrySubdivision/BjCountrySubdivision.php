<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Benin country subdivision.
 *
 * ISO 3166-1 alpha-2: BJ
 *
 * @link http://www.geonames.org/BJ/administrative-division-benin.html
 */
class BjCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AK', // Atakora
        'AL', // Alibori
        'AQ', // Atlantique
        'BO', // Borgou
        'CO', // Collines
        'DO', // Donga
        'KO', // Kouffo
        'LI', // Littoral
        'MO', // Mono
        'OU', // Oueme
        'PL', // Plateau
        'ZO', // Zou
    );

    public $compareIdentical = true;
}
