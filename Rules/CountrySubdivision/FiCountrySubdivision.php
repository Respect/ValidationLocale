<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Finland country subdivision.
 *
 * ISO 3166-1 alpha-2: FI
 *
 * @link http://www.geonames.org/FI/administrative-division-finland.html
 */
class FiCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        '01', // Ahvenanmaa [Finnish] / Åland [Swedish]
        '02', // Etelä-Karjala [Finnish] / Södra Karelen [Swedish]
        '03', // Etelä-Pohjanmaa [Finnish] / Södra Österbotten [Swedish]
        '04', // Etelä-Savo [Finnish] / Södra Savolax [Swedish]
        '05', // Kainuu [Finnish] / Kajanaland [Swedish]
        '06', // Kanta-Häme [Finnish] / Egentliga Tavastland [Swedish]
        '07', // Keski-Pohjanmaa [Finnish] / Mellersta Österbotten [Swedish]
        '08', // Keski-Suomi [Finnish] / Mellersta Finland [Swedish]
        '09', // Kymenlaakso [Finnish] / Kymmenedalen [Swedish]
        '10', // Lappi [Finnish] / Lappland [Swedish]
        '11', // Pirkanmaa [Finnish] / Birkaland [Swedish]
        '12', // Pohjanmaa [Finnish] / Österbotten [Swedish]
        '13', // Pohjois-Karjala [Finnish] / Norra Karelen [Swedish]
        '14', // Pohjois-Pohjanmaa [Finnish] / Norra Österbotten [Swedish]
        '15', // Pohjois-Savo [Finnish] / Norra Savolax [Swedish]
        '16', // Päijät-Häme [Finnish] / Päijänne-Tavastland [Swedish]
        '17', // Satakunta [Finnish and Swedish]
        '18', // Uusimaa [Finnish] / Nyland [Swedish]
        '19', // Varsinais-Suomi [Finnish] / Egentliga Finland [Swedish]
        'AL', // Ahvenanmaan laani
        'ES', // Etela-Suomen laani
        'IS', // Ita-Suomen laani
        'LL', // Lapin laani
        'LS', // Lansi-Suomen laani
        'OL', // Oulun laani
    );

    public $compareIdentical = true;
}
