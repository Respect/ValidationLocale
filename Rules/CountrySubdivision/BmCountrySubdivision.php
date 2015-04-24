<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Bermuda country subdivision.
 *
 * ISO 3166-1 alpha-2: BM
 *
 * @link http://www.geonames.org/BM/administrative-division-bermuda.html
 */
class BmCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'DS', // Devonshire
        'GC', // Saint George
        'HA', // Hamilton
        'HC', // Hamilton City
        'PB', // Pembroke
        'PG', // Paget
        'SA', // Sandys
        'SG', // Saint George's
        'SH', // Southampton
        'SM', // Smith's
        'WA', // Warwick
    );

    public $compareIdentical = true;
}
