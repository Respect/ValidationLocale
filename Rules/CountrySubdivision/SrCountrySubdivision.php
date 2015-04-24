<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Suriname country subdivision.
 *
 * ISO 3166-1 alpha-2: SR
 *
 * @link http://www.geonames.org/SR/administrative-division-suriname.html
 */
class SrCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BR', // Brokopondo
        'CM', // Commewijne
        'CR', // Coronie
        'MA', // Marowijne
        'NI', // Nickerie
        'PM', // Paramaribo
        'PR', // Para
        'SA', // Saramacca
        'SI', // Sipaliwini
        'WA', // Wanica
    );

    public $compareIdentical = true;
}
