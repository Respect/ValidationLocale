<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Mayotte country subdivision.
 *
 * ISO 3166-1 alpha-2: YT
 *
 * @link http://www.geonames.org/YT/administrative-division-mayotte.html
 */
class YtCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
