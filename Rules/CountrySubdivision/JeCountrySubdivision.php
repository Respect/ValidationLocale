<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Jersey country subdivision.
 *
 * ISO 3166-1 alpha-2: JE
 *
 * @link http://www.geonames.org/JE/administrative-division-jersey.html
 */
class JeCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
