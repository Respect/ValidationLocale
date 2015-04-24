<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Martinique country subdivision.
 *
 * ISO 3166-1 alpha-2: MQ
 *
 * @link http://www.geonames.org/MQ/administrative-division-martinique.html
 */
class MqCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
