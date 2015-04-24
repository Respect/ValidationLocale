<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Guadeloupe country subdivision.
 *
 * ISO 3166-1 alpha-2: GP
 *
 * @link http://www.geonames.org/GP/administrative-division-guadeloupe.html
 */
class GpCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
