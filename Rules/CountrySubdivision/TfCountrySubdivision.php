<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for French Southern Territories country subdivision.
 *
 * ISO 3166-1 alpha-2: TF
 *
 * @link http://www.geonames.org/TF/administrative-division-french-southern-territories.html
 */
class TfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
