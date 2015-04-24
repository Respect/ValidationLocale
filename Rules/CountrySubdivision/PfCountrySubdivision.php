<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for French Polynesia country subdivision.
 *
 * ISO 3166-1 alpha-2: PF
 *
 * @link http://www.geonames.org/PF/administrative-division-french-polynesia.html
 */
class PfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'I', // Austral Islands
        'M', // Marquesas Islands
        'S', // Iles Sous-le-Vent
        'T', // Tuamotu-Gambier
        'V', // Iles du Vent
    );

    public $compareIdentical = true;
}
