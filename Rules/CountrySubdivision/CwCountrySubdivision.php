<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Curacao country subdivision.
 *
 * ISO 3166-1 alpha-2: CW
 *
 * @link http://www.geonames.org/CW/administrative-division-curacao.html
 */
class CwCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
