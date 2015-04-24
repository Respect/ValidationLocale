<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Åland country subdivision.
 *
 * ISO 3166-1 alpha-2: AX
 *
 * @link http://www.geonames.org/AX/administrative-division-aland.html
 */
class AxCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
