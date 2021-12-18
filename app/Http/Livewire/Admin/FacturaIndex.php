<?php

namespace App\Http\Livewire\Admin;

use App\Models\Factura;
use Livewire\Component;
use Livewire\WithPagination;

class FacturaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $facturas = Factura::where('num_venta', 'LIKE', '%' . $this->search . '%')
        ->paginate(8);
            
        return view('livewire.admin.factura-index', compact('facturas'));

    }

    public function limpiar_page()
    {
        $this->reset('page');
    }

}
