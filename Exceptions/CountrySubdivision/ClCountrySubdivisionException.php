<?php

namespace Respect\Validation\Exceptions\CountrySubdivision;

use Respect\Validation\Exceptions\CountrySubdivisionException;

/**
 * Exception class for Chile country subdivision.
 *
 * ISO 3166-1 alpha-2: CL
 */
class ClCountrySubdivisionException extends CountrySubdivisionException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a country subdivision of Chile',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a country subdivision of Chile',
        ),
    );
}
