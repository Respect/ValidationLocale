<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Netherlands Antilles country subdivision.
 *
 * ISO 3166-1 alpha-2: AN
 *
 * @link http://www.geonames.org/AN/administrative-division-netherlands-antilles.html
 */
class AnCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
