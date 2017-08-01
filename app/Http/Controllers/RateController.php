<?php

namespace App\Http\Controllers;

use App\Services\RateConverterService;

/**
 * Class RateController
 *
 * @package App\Http\Controllers
 */
class RateController extends Controller
{
    protected $service;

    /**
     * Initialise Class
     */
    public function __construct()
    {
        $this->service = new RateConverterService();
    }

    /**
     * Get the latest rate form fixer.io
     *
     * @return string
     */
    public function latest()
    {
        return $this->service->getLatestRate();
    }

    /**
     * Get the latest rates by currency from fixer.io
     *
     * @return string
     */
    public function ratesByCurrency()
    {
        return $this->service->getRateByCurrency();
    }

    /**
     * Get all the rates from fixer.io
     *
     * @return string
     */
    public function allRates()
    {
        return $this->service->getAllRates();
    }
}
