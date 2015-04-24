<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Saint Barthélemy country subdivision.
 *
 * ISO 3166-1 alpha-2: BL
 *
 * @link http://www.geonames.org/BL/administrative-division-saint-barthelemy.html
 */
class BlCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
