<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Macao country subdivision.
 *
 * ISO 3166-1 alpha-2: MO
 *
 * @link http://www.geonames.org/MO/administrative-division-macao.html
 */
class MoCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
