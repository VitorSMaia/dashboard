<?php

namespace App\Http\Livewire\PiggyBank;

use App\Models\PiggyBank;
use App\Services\Awesomeapi;
use App\Trait\Modal;
use Livewire\Component;
use StdClass;


class Card extends Component
{
    use Modal;

    public function entry($money, $value)
    {
        $awesomeapi = new Awesomeapi;

        if ($money != 'BRL') {
            $value = $awesomeapi->consultMoney($money,$value);
        }

        PiggyBank::query()->create([
            'value' => $value,
        ]);

        $this->emit('refreshPiggyBankValue');
    }

    public function exit($money)
    {
        $awesomeapi = new Awesomeapi;

        if ($money != 'BRL') {
            $value = $awesomeapi->consultMoney($money);
        }

        PiggyBank::query()->create([
            'value' => ($value * (-1)),
        ]);
        $this->emit('refreshPiggyBankValue');
    }

    public function render()
    {
        return view('livewire.piggy-bank.card');
    }
}
