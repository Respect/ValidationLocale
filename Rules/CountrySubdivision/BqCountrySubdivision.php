<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Bonaire country subdivision.
 *
 * ISO 3166-1 alpha-2: BQ
 *
 * @link http://www.geonames.org/BQ/administrative-division-bonaire.html
 */
class BqCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BO', // Bonaire
        'SA', // Saba
        'SE', // Sint Eustatius
    );

    public $compareIdentical = true;
}
