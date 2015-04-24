<?php

namespace Respect\Validation\Exceptions\CountrySubdivision;

use Respect\Validation\Exceptions\CountrySubdivisionException;

/**
 * Exception class for Benin country subdivision.
 *
 * ISO 3166-1 alpha-2: BJ
 */
class BjCountrySubdivisionException extends CountrySubdivisionException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a country subdivision of Benin',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a country subdivision of Benin',
        ),
    );
}
