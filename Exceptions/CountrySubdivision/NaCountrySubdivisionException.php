<?php

namespace Respect\Validation\Exceptions\CountrySubdivision;

use Respect\Validation\Exceptions\CountrySubdivisionException;

/**
 * Exception class for Namibia country subdivision.
 *
 * ISO 3166-1 alpha-2: NA
 */
class NaCountrySubdivisionException extends CountrySubdivisionException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a country subdivision of Namibia',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a country subdivision of Namibia',
        ),
    );
}
