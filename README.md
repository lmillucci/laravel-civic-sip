# Laravel-civic-sip
A service made to provide, set up and use the library from blockvis [civic-sip-php](https://github.com/blockvis/civic-sip-php) in Laravel.

# Installing
* Install laravel-civic-sip package
`composer require lmillucci/laravel-civic-sip`
* Publish configuration with
`php artisan vendor:publish`
* Define env variables to use Civic
```
CIVIC_APPLICATION_ID=app_id
CIVIC_APPLICATION_SECRET=123456abcd
CIVIC_PRIVATE_SIGNING_KEY=abcd123456
CIVIC_ENVIRONMENT=prod
```

# Implement server side validation
```
<? php

// Exchange Civic authorization code for requested user data.
$userData = CivicFacade::exchangeToken($jwtToken);
```

# License
This project is licensed under the MIT License.
