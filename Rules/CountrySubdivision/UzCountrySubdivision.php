<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Uzbekistan country subdivision.
 *
 * ISO 3166-1 alpha-2: UZ
 *
 * @link http://www.geonames.org/UZ/administrative-division-uzbekistan.html
 */
class UzCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AN', // Andijon
        'BU', // Buxoro
        'FA', // Farg'ona
        'JI', // Jizzax
        'NG', // Namangan
        'NW', // Navoiy
        'QA', // Qashqadaryo
        'QR', // Qoraqalpog'iston Republikasi
        'SA', // Samarqand
        'SI', // Sirdaryo
        'SU', // Surxondaryo
        'TK', // Toshkent city
        'TO', // Toshkent region
        'XO', // Xorazm
    );

    public $compareIdentical = true;
}
