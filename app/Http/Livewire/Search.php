<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty()
    {
        return Producto::where('nombre','LIKE', '%'. $this->search .'%' )->where('estatus', 1)->take(5)->get();
    }
}
