<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Antarctica country subdivision.
 *
 * ISO 3166-1 alpha-2: AQ
 *
 * @link http://www.geonames.org/AQ/administrative-division-antarctica.html
 */
class AqCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
