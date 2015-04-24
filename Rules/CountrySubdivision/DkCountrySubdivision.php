<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Denmark country subdivision.
 *
 * ISO 3166-1 alpha-2: DK
 *
 * @link http://www.geonames.org/DK/administrative-division-denmark.html
 */
class DkCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        '81', // Region Nordjylland
        '82', // Region Midtjylland
        '83', // Region Syddanmark
        '84', // Region Hovedstaden
        '85', // Region Sjæland
    );

    public $compareIdentical = true;
}
