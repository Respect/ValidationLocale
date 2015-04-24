<?php

namespace Respect\Validation\Exceptions\CountrySubdivision;

use Respect\Validation\Exceptions\CountrySubdivisionException;

/**
 * Exception class for Bosnia and Herzegovina country subdivision.
 *
 * ISO 3166-1 alpha-2: BA
 */
class BaCountrySubdivisionException extends CountrySubdivisionException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a country subdivision of Bosnia and Herzegovina',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a country subdivision of Bosnia and Herzegovina',
        ),
    );
}
