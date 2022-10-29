<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ModalCenter extends Component
{
    public $show = false;
    public $component = '';
    public $params = [];

    protected $listeners = ['showModal' => 'open', 'closeModal' => 'close'];

    public function open($component,$params)
    {
        $this->show = true;

        $this->component = $component;
        $this->params = $params;
    }

    public function close()
    {
        $this->show = false;
    }


    public function render()
    {
        return view('livewire.components.modal-center');
    }
}
