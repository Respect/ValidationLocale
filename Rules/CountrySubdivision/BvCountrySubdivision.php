<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Bouvet Island country subdivision.
 *
 * ISO 3166-1 alpha-2: BV
 *
 * @link http://www.geonames.org/BV/administrative-division-bouvet-island.html
 */
class BvCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
