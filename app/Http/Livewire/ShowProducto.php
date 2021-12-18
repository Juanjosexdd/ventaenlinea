<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Producto;


class ShowProducto extends Component
{
    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    protected $listeners = ['render' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    

    public function render()
    {
        $productos = Producto::where('nombre', 'like', '%' . $this->search . '%')
                   ->orWhere('id', 'like', '%' . $this->search . '%')
                   ->orWhere('precio_venta', 'like', '%' . $this->search . '%')
                   ->paginate(10);
                   
        return view('livewire.show-producto', compact('productos'));
    }


}
