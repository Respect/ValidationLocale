<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Greenland country subdivision.
 *
 * ISO 3166-1 alpha-2: GL
 *
 * @link http://www.geonames.org/GL/administrative-division-greenland.html
 */
class GlCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'KU', // Kujalleq
        'QA', // Qaasuitsup
        'QE', // Qeqqata
        'SM', // Sermersooq
    );

    public $compareIdentical = true;
}
