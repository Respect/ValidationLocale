<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Libya country subdivision.
 *
 * ISO 3166-1 alpha-2: LY
 *
 * @link http://www.geonames.org/LY/administrative-division-libya.html
 */
class LyCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'BA', // Banghazi
        'BU', // Al Buţnān
        'DR', // Darnah
        'GT', // Ghāt
        'JA', // Al Jabal al Akhdar
        'JG', // Al Jabal al Gharbī
        'JI', // Al Jifārah
        'JU', // Al Jufrah
        'KF', // Al Kufrah
        'MB', // Al Marqab
        'MI', // Misratah
        'MJ', // Al Maraj
        'MQ', // Murzuq
        'NL', // Nālūt
        'NQ', // An Nuqat al Khams
        'SB', // Sabha
        'SR', // Surt
        'TB', // Ţarābulus
        'WA', // Al Wāḩāt
        'WD', // Wādī al Ḩayāt
        'WS', // Wādī ash Shāţi´
        'ZA', // Az Zawiyah
    );

    public $compareIdentical = true;
}
