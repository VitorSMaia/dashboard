<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Awesomeapi
{
    public function consultMoney($money,$value)
    {
        $result = Http::get('https://economia.awesomeapi.com.br/last/' . $money)->json();

        $valueDeposit = $this->calculateMoney($result, $value);

        return $valueDeposit;
    }

    private function calculateMoney($result,$value)
    {
        $real = 0;

        foreach ($result as $itemResult) {
            $real = $value * $itemResult['high'];
        }

        return $real;
    }
}
