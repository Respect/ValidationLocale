<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Réunion country subdivision.
 *
 * ISO 3166-1 alpha-2: RE
 *
 * @link http://www.geonames.org/RE/administrative-division-reunion.html
 */
class ReCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
