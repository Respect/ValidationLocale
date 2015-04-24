<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Niue country subdivision.
 *
 * ISO 3166-1 alpha-2: NU
 *
 * @link http://www.geonames.org/NU/administrative-division-niue.html
 */
class NuCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
