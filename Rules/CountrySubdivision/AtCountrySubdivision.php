<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Austria country subdivision.
 *
 * ISO 3166-1 alpha-2: AT
 *
 * @link http://www.geonames.org/AT/administrative-division-austria.html
 */
class AtCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        '1', // Burgenland
        '2', // Karnten
        '3', // Niederosterreich
        '4', // Oberosterreich
        '5', // Salzburg
        '6', // Steiermark
        '7', // Tirol
        '8', // Vorarlberg
        '9', // Wien
    );

    public $compareIdentical = true;
}
