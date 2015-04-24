<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Cayman Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: KY
 *
 * @link http://www.geonames.org/KY/administrative-division-cayman-islands.html
 */
class KyCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'CR', // Creek
        'EA', // Eastern
        'ML', // Midland
        'SK', // Stake Bay
        'SP', // Spot Bay
        'ST', // South Town
        'WD', // West End
        'WN', // Western
    );

    public $compareIdentical = true;
}
