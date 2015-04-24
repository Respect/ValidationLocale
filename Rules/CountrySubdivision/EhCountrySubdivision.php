<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Western Sahara country subdivision.
 *
 * ISO 3166-1 alpha-2: EH
 *
 * @link http://www.geonames.org/EH/administrative-division-western-sahara.html
 */
class EhCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
