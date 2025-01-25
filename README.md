# Conditional Helpers PHP

A collection of PHP helper functions to be used in conditional logic within projects.

## Table of Contents

- [Installation](#installation)
- [Functions](#functions)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

To use these conditional helpers, simply install the package via Composer:

```bash
composer require garydavisonos/conditional-helpers
```

## Functions

The following helper functions are available:

```php
isArrayHasLength($array): Checks if an array has a length greater than zero.
isStringHasLength($string): Checks if a string has a length greater than zero.
isBooleanTrue($boolean): Checks if a value is a boolean true.
isBooleanFalse($boolean): Checks if a value is a boolean false.
```

## Usage

Check if an array has a length greater than zero:

```php
use GaryDavisonOs\ConditionalHelpers\ConditionalHelpers as Helpers;

$array = [1, 2, 3];
$result = Helpers::isArrayHasLength($array); // Returns true
```

Check if a string has a length greater than zero

```php
use GaryDavisonOs\ConditionalHelpers\ConditionalHelpers as Helpers;

$string = "Hello, World!";
$result = Helpers::isStringHasLength($string); // Returns true
```

Check if a value is a boolean true

```php
use GaryDavisonOs\ConditionalHelpers\ConditionalHelpers as Helpers;

$boolean = true;
$result = Helpers::isBooleanTrue($boolean); // Returns true
```

## Contributing

Contributions are welcome! If you'd like to add a new helper function or improve an existing one, please submit a pull request.

## License

This package is licensed under the MIT License.
