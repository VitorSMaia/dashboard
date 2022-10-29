<?php

namespace App\Http\Livewire\Modals;

use App\Trait\Modal;
use Livewire\Component;

class Side extends Component
{
    use Modal;

    public function render()
    {
        return view('livewire.modals.side');
    }
}
