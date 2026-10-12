<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\RateService;

class RateController extends Controller
{
    public function getRate(): void
    {
        $rateData = RateService::getRate();

        $this->json([
            'status' => 'success',
            'data' => $rateData
        ]);
    }
}
