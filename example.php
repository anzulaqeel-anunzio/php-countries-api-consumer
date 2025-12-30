// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel

<?php
require_once 'vendor/autoload.php';

use Anunzio\Countries\CountriesClient;

// Mocking the behavior if vendor isn't installed for this boilerplate
if (!class_exists('GuzzleHttp\Client')) {
    echo "Please run 'composer install' to install dependencies.\n";
    exit(1);
}

$client = new CountriesClient();

try {
    echo "Fetching Brazil...\n";
    $brazil = $client->getByName("Brazil");
    if (!empty($brazil)) {
        echo "Official Name: " . $brazil[0]['name']['official'] . "\n";
        echo "Region: " . $brazil[0]['region'] . "\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel
