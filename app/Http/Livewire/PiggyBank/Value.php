<?php

namespace App\Http\Livewire\PiggyBank;

use App\Models\PiggyBank;
use Livewire\Component;
use StdClass;


class Value extends Component
{
    protected $listeners = ['refreshPiggyBankValue' => '$refresh'];

    public function ListValues()
    {
        $piggyBankDB = PiggyBank::query()->orderBy('id', 'DESC')->limit(10)->get();

        foreach ($piggyBankDB as $key => $item) {
            if ($item['value'] > 0) {
                $piggyBankDB[$key]['positive'] = 1;
            } else if ($item['value'] < 0 ) {
                $piggyBankDB[$key]['positive'] = 2;
            } else if ($item['value'] = 0) {
                $piggyBankDB[$key]['positive'] = 3;
            }
        }

        return $piggyBankDB;
    }

    public function render()
    {
        $this->value = PiggyBank::query()->sum('value');

        $response = new StdClass;
        $response->listValues = $this->ListValues();

        return view('livewire.piggy-bank.value', ['response' => $response]);
    }
}
