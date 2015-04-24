<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Saint Martin country subdivision.
 *
 * ISO 3166-1 alpha-2: MF
 *
 * @link http://www.geonames.org/MF/administrative-division-saint-martin.html
 */
class MfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
