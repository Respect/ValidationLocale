<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for United Arab Emirates country subdivision.
 *
 * ISO 3166-1 alpha-2: AE
 *
 * @link http://www.geonames.org/AE/administrative-division-united-arab-emirates.html
 */
class AeCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AJ', // 'Ajman
        'AZ', // Abu Zaby
        'DU', // Dubayy
        'FU', // Al Fujayrah
        'RK', // R'as al Khaymah
        'SH', // Ash Shariqah
        'UQ', // Umm al Qaywayn
    );

    public $compareIdentical = true;
}
