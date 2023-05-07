<?php

namespace App\View\Components\Modal;

use App\Models\Material;
use Illuminate\View\Component;

class HapusMaterial extends Component
{
    public $material;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Material $material)
    {
        $this->material = $material;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.hapus-material');
    }
}
