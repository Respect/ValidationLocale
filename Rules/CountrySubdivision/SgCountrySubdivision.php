<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Singapore country subdivision.
 *
 * ISO 3166-1 alpha-2: SG
 *
 * @link http://www.geonames.org/SG/administrative-division-singapore.html
 */
class SgCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        '01', // Central Singapore
        '02', // North East
        '03', // North West
        '04', // South East
        '05', // South West
    );

    public $compareIdentical = true;
}
