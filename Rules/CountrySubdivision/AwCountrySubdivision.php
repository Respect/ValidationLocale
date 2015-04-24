<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Aruba country subdivision.
 *
 * ISO 3166-1 alpha-2: AW
 *
 * @link http://www.geonames.org/AW/administrative-division-aruba.html
 */
class AwCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
