# Respect\ValidationLocale

A set of Respect\Validation rules to work with localization.

## Country

- `v::country()`
- `v::country(string $set)`

Validates country codes according to [ISO 3166-1][].

```php
v::country()->validate('BR'); //true
```

By default we choose [ISO 3166-1 alpha-2][] but you can use [ISO 3166-1 alpha-3][]
and [ISO 3166-1 numeric][] as well.

```php
v::country('alpha-2')->validate('US'); //true
v::country('alpha-3')->validate('USA'); //true
v::country('numeric')->validate('840'); //true
```

This rule is case sensitive.

All data of this rule was extracted from [GeoNames][] which is licensed under a
[Creative Commons Attribution 3.0 License][].

## CountrySubdivision

- `v::countrySubdivision(string $entry)`

Validates country codes according to [ISO 3166-2][].

The `$entry` must be a country in [ISO 3166-1 alpha-2][] format.

```php
v::countrySubdivision('BR')->validate('SP'); //true
v::countrySubdivision('US')->validate('CA'); //true
```

This rule is case sensitive.

All data of this rule was extracted from [GeoNames][] which is licensed under a
[Creative Commons Attribution 3.0 License][].

[Creative Commons Attribution 3.0 License]: http://creativecommons.org/licenses/by/3.0 "Creative Commons Attribution 3.0 License"
[GeoNames]: http://www.geonames.org "GetNames"
[ISO 3166-1]: http://en.wikipedia.org/wiki/ISO_3166-1 "ISO 3166-1"
[ISO 3166-1 alpha-2]: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 "ISO 3166-1 alpha-2"
[ISO 3166-1 alpha-3]: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3 "ISO 3166-1 alpha-3"
[ISO 3166-1 numeric]: http://en.wikipedia.org/wiki/ISO_3166-1_numeric "ISO 3166-1 numeric"
[ISO 3166-2]: http://en.wikipedia.org/wiki/ISO_3166-2 "ISO 3166-2"
