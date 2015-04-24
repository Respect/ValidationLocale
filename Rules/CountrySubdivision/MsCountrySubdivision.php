<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Montserrat country subdivision.
 *
 * ISO 3166-1 alpha-2: MS
 *
 * @link http://www.geonames.org/MS/administrative-division-montserrat.html
 */
class MsCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
