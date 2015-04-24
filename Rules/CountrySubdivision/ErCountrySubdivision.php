<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Eritrea country subdivision.
 *
 * ISO 3166-1 alpha-2: ER
 *
 * @link http://www.geonames.org/ER/administrative-division-eritrea.html
 */
class ErCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AN', // Anseba (Keren)
        'DK', // Southern Red Sea (Debub-Keih-Bahri)
        'DU', // Southern (Debub)
        'GB', // Gash-Barka (Barentu)
        'MA', // Central (Maekel)
        'SK', // Northern Red Sea (Semien-Keih-Bahri)
    );

    public $compareIdentical = true;
}
