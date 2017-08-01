<?php

namespace App\Services;

use \GuzzleHttp\Client;

/**
 * Class RateConverterService
 *
 * @package App\Services
 */
class RateConverterService
{
    /**
     * Guzzle client
     *
     * @var Client
     */
    protected $client;

    /**
     * Build url
     *
     * @var
     */
    protected $url;

    /**
     * Service base url
     */
    const BASE_URL = 'http://api.fixer.io/latest?';

    /**
     * Initialise Service class
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->url = self::BASE_URL;
    }

    /**
     * Get the built url
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Build and set the called url
     *
     * @param array $params params
     *
     * @return $this
     */
    public function setUrl($params = [])
    {
        $data = [];

        foreach ($params as $key => $val) {
            $data[$key] = $val;
        }

        $this->url = self::BASE_URL . http_build_query($data);

        return $this;
    }

    /**
     * Return latest rate from fixer.io
     *
     * @return string
     */
    public function getLatestRate()
    {
        $this->setUrl();

        $currencies = $this->getResponse();

        return $currencies;
    }

    /**
     * Return the latest rates by currency
     *
     * @return string
     */
    public function getRateByCurrency()
    {
        $this->setUrl(['base' => 'USD']);

        $rates = $this->getResponse();

        return $rates['rates'];
    }

    /**
     * Make get request via Http Client
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getResponse()
    {
        $response = $this->client->get($this->getUrl());

        return json_decode($response->getBody(), true);
    }

    /**
     * Return all the rates [symbols]
     *
     * @return string
     */
    public function getAllRates()
    {
        $this->setUrl(['base' => 'USD', 'symbols' => 'USD,GBP']);

        $rates = $this->getResponse();

        return $rates;
    }

    /**
     * Return an array of existing currencies
     *
     * @return array
     */
    public function getCurrencies()
    {
        $allCurrencies = array_keys($this->getLatestRate()['rates']);
        $allCurrencies[] = $this->getLatestRate()['base'];

        return $allCurrencies;
    }
}
