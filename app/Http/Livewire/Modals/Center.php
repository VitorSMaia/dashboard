<?php

namespace App\Http\Livewire\Modals;

use App\Trait\Modal;
use Livewire\Component;

class Center extends Component
{
    use Modal;

    public function render()
    {
        return view('livewire.modals.center');
    }
}
