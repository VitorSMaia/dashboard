<?php

namespace App\Http\Livewire\Components;

use App\Trait\Modal;
use Livewire\Component;

class Buttom extends Component
{
    use Modal;

    public $component;
    public $text;

    public function mount($component, $text)
    {
        $this->component = $component;
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.components.buttom');
    }
}
