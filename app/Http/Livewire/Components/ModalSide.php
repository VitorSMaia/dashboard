<?php

namespace App\Http\Livewire\Components;

use App\Trait\Modal;
use Livewire\Component;

class ModalSide extends Component
{
    use Modal;

    public $show = false;
    public $component = '';
    public $params = [];

    protected $listeners = ['showModal' => 'open', 'closeModal' => 'close'];

    public function open($component, $params = null)
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
        return view('livewire.components.modal-side');
    }
}
