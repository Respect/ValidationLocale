<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Central African Republic country subdivision.
 *
 * ISO 3166-1 alpha-2: CF
 *
 * @link http://www.geonames.org/CF/administrative-division-central-african-republic.html
 */
class CfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AC', // Ouham
        'BB', // Bamingui-Bangoran
        'BGF', // Bangui
        'BK', // Basse-Kotto
        'HK', // Haute-Kotto
        'HM', // Haut-Mbomou
        'HS', // Mambere-Kadeï
        'KB', // Nana-Grebizi
        'KG', // Kemo
        'LB', // Lobaye
        'MB', // Mbomou
        'MP', // Ombella-M'Poko
        'NM', // Nana-Mambere
        'OP', // Ouham-Pende
        'SE', // Sangha-Mbaere
        'UK', // Ouaka
        'VK', // Vakaga
    );

    public $compareIdentical = true;
}
