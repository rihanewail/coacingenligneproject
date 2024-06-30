<?php

namespace App\Livewire;

use App\Models\cour;
use App\Models\produit;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AffichecCours extends Component
{
    // #[On('AffichecCours')]

    protected $listeners = ['AffichecCours' => '$refresh'];
    use WithPagination;
    protected $paginationtheme='bootstrap';
    public function render()
    {
        $cours = Cour::where('user_id', Auth::id())->with('produits')->get();

        // Alternatively, if you want to directly fetch produits for the authenticated user:
        $produits = Produit::whereHas('cours', function($query) {
            $query->where('user_id', Auth::id());
        })->paginate(2);

        return view('livewire.affichec-cours', compact('cours', 'produits'));
    }
}
