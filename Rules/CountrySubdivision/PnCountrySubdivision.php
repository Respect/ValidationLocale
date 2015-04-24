<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Pitcairn Islands country subdivision.
 *
 * ISO 3166-1 alpha-2: PN
 *
 * @link http://www.geonames.org/PN/administrative-division-pitcairn-islands.html
 */
class PnCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
