<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Laos country subdivision.
 *
 * ISO 3166-1 alpha-2: LA
 *
 * @link http://www.geonames.org/LA/administrative-division-laos.html
 */
class LaCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AT', // Attapu
        'BK', // Bokeo
        'BL', // Bolikhamxai
        'CH', // Champasak
        'HO', // Houaphan
        'KH', // Khammouan
        'LM', // Louang Namtha
        'LP', // Louangphabang
        'OU', // Oudomxai
        'PH', // Phongsali
        'SL', // Salavan
        'SV', // Savannakhet
        'VI', // Vientiane
        'VT', // Vientiane
        'XA', // Xaignabouli
        'XE', // Xekong
        'XI', // Xiangkhoang
        'XN', // Xaisomboun
    );

    public $compareIdentical = true;
}
