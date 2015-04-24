<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Puerto Rico country subdivision.
 *
 * ISO 3166-1 alpha-2: PR
 *
 * @link http://www.geonames.org/PR/administrative-division-puerto-rico.html
 */
class PrCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
