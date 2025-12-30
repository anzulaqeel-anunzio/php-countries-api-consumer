// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel

<?php
/*
 * Developed for Anunzio International by Anzul Aqeel
 * Contact +971545822608 or +971585515742
 */

namespace Anunzio\Countries;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CountriesClient
{
    private $client;
    private $baseUrl = 'https://restcountries.com/v3.1';

    public function __construct() {
        $this->client = new Client(['base_uri' => $this->baseUrl]);
    }

    private function request($endpoint) {
        try {
            $response = $this->client->request('GET', $this->baseUrl . $endpoint);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \Exception("API Request failed: " . $e->getMessage());
        }
    }

    public function getAll() {
        return $this->request('/all');
    }

    public function getByName($name) {
        return $this->request('/name/' . urlencode($name));
    }

    public function getByCode($code) {
        return $this->request('/alpha/' . urlencode($code));
    }

    public function getByRegion($region) {
        return $this->request('/region/' . urlencode($region));
    }
}

// Developed for Anunzio International by Anzul Aqeel. Contact +971545822608 or +971585515742. Linkedin Profile: linkedin.com/in/anzulaqeel
