<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Vatican City country subdivision.
 *
 * ISO 3166-1 alpha-2: VA
 *
 * @link http://www.geonames.org/VA/administrative-division-vatican-city.html
 */
class VaCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
