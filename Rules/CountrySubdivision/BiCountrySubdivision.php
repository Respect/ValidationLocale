<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Burundi country subdivision.
 *
 * ISO 3166-1 alpha-2: BI
 *
 * @link http://www.geonames.org/BI/administrative-division-burundi.html
 */
class BiCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BB', // Bubanza
        'BL', // Bujumbura Rural
        'BM', // Bujumbura Mairie
        'BR', // Bururi
        'CA', // Cankuzo
        'CI', // Cibitoke
        'GI', // Gitega
        'KI', // Kirundo
        'KR', // Karuzi
        'KY', // Kayanza
        'MA', // Makamba
        'MU', // Muramvya
        'MW', // Mwaro
        'MY', // Muyinga
        'NG', // Ngozi
        'RT', // Rutana
        'RY', // Ruyigi
    );

    public $compareIdentical = true;
}
