<?php

namespace App\Http\Livewire\PiggyBank;

use App\Models\PiggyBank;
use App\Services\Awesomeapi;
use App\Trait\Modal;
use Livewire\Component;

class Form extends Component
{
    use Modal;

    public $state;
    public $money;

    public function mount($money = null)
    {
        if ($money) {
            $this->money = $money;
        }
    }

    public function entry()
    {
        $awesomeapi = new Awesomeapi;
        $value = $this->state['value'];
        if ($this->money != 'BRL') {
            $value = $awesomeapi->consultMoney($this->money, $value);
        }

        PiggyBank::query()->create([
            'value' => $value,
        ]);
        return false;

//        $this->emit('refreshPiggyBankValue');
//        $this->closeModal();
//        $this->redirect('cofrinho');
    }

    public function exit()
    {
        $awesomeapi = new Awesomeapi;
        $value = $this->state['value'];

        if ($this->money != 'BRL') {
            $value = $awesomeapi->consultMoney($this->money, $value);
        }

        PiggyBank::query()->create([
            'value' => ($value * (-1)),
        ]);

//        $this->emit('refreshPiggyBankValue');
//        $this->closeModal();
//        $this->redirect('cofrinho');
    }

    public function render()
    {
        return view('livewire.piggy-bank.form');
    }
}
