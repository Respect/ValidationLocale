<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for British Virgin Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: VG
 *
 * @link http://www.geonames.org/VG/administrative-division-british-virgin-islands.html
 */
class VgCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
