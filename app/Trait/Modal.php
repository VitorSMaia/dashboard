<?php

namespace App\Trait;

trait Modal
{
    public function openModal($component, $params = null)
    {
        $this->emitTo('components.modal-center', 'showModal', $component, $params);
    }

    public function closeModal()
    {
        $this->emitTo('components.modal-center', 'closeModal');
    }

    public function openModalSide($component, $params = null)
    {
        $this->emitTo('components.modal-side', 'showModal', $component, $params);
    }

    public function closeModalSide()
    {
        $this->emitTo('components.modal-side', 'closeModal');
    }
}
