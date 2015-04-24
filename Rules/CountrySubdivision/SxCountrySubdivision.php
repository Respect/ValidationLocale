<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Sint Maarten country subdivision.
 *
 * ISO 3166-1 alpha-2: SX
 *
 * @link http://www.geonames.org/SX/administrative-division-sint-maarten.html
 */
class SxCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
