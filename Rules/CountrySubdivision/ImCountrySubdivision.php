<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Isle of Man country subdivision.
 *
 * ISO 3166-1 alpha-2: IM
 *
 * @link http://www.geonames.org/IM/administrative-division-isle-of-man.html
 */
class ImCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
