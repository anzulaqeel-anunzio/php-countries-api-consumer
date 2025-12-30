# Countries REST API Consumer (PHP)

A PHP client library for the [REST Countries API](https://restcountries.com/).

## Features

-   **Get All Countries**: Fetch list of all countries.
-   **Search by Name**: Find countries by full name or substring.
-   **Search by Code**: Get country by ISO 3166-1 2-letter or 3-letter country code.
-   **PSR-4 Autoloading**: Compliant with modern PHP standards.

## Installation

```bash
composer require anunzio/countries-api-consumer
```

## Usage

```php
require_once 'vendor/autoload.php';

use Anunzio\Countries\CountriesClient;

$client = new CountriesClient();

try {
    // Get all countries
    $countries = $client->getAll();
    echo "Total countries: " . count($countries) . "\n";

    // Search by name
    $results = $client->getByName("United");
    foreach ($results as $country) {
        echo $country['name']['common'] . "\n";
    }

    // Get by code
    $france = $client->getByCode("fr");
    echo "Capital of France: " . $france[0]['capital'][0];

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

## Contact

Developed for Anunzio International by Anzul Aqeel.
Contact +971545822608 or +971585515742.

## License

MIT


---
### 🔗 Part of the "Ultimate Utility Toolkit"
This tool is part of the **[Anunzio International Utility Toolkit](https://github.com/anzulaqeel-anunzio/ultimate-utility-toolkit)**.
Check out the full collection of **180+ developer tools, scripts, and templates** in the master repository.

Developed for Anunzio International by Anzul Aqeel.
