<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for U.S. Virgin Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: VI
 *
 * @link http://www.geonames.org/VI/administrative-division-u-s-virgin-islands.html
 */
class ViCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'C', // Saint Croix
        'J', // Saint John
        'T', // Saint Thomas
    );

    public $compareIdentical = true;
}
