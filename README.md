# DDB Cover Service PHP Client

Provides a php client for working with the DDB Cover Service API.

Generated from swagger documentation with https://swagger.io/tools/swagger-codegen/.

## Test script.

See `test.php` for an example of the use of the library.

Copy `config.php.template` to `config.php` and fill out the required constants.

```
composer install
php test.php
```

## Get the code generator

See

`https://swagger.io/tools/swagger-codegen/`

or on github:

`https://github.com/swagger-api/swagger-codegen`

## With Homebrew (mac)

```
# Install with homebrew
brew install swagger-codegen

# Generate library from openapi specification.
swagger-codegen generate -i https://cover.dandigbib.org/openapi/openapi.yaml -l php
```

## For other setups see the documentation.
```
https://github.com/swagger-api/swagger-codegen
```
