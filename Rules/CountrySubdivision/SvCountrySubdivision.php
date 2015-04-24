<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for El Salvador country subdivision.
 *
 * ISO 3166-1 alpha-2: SV
 *
 * @link http://www.geonames.org/SV/administrative-division-el-salvador.html
 */
class SvCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AH', // Ahuachapan
        'CA', // Cabanas
        'CH', // Chalatenango
        'CU', // Cuscatlan
        'LI', // La Libertad
        'MO', // Morazan
        'PA', // La Paz
        'SA', // Santa Ana
        'SM', // San Miguel
        'SO', // Sonsonate
        'SS', // San Salvador
        'SV', // San Vicente
        'UN', // La Union
        'US', // Usulutan
    );

    public $compareIdentical = true;
}
