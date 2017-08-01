<?php

namespace App\Http\Controllers;

use App\Services\RateConverterService;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Return view with needed data
     */
    public function index()
    {
        $rateConversionService = new RateConverterService();
        $currencies = $rateConversionService->getCurrencies();

        return view('welcome', compact('currencies'));
    }
}
