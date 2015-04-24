<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Norfolk Island country subdivision.
 *
 * ISO 3166-1 alpha-2: NF
 *
 * @link http://www.geonames.org/NF/administrative-division-norfolk-island.html
 */
class NfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
