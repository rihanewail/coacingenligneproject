<?php

namespace App\Livewire;

use App\Models\cour;
use App\Models\produit;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddCourse extends Component
{
    public $name;
    public $type;
    public $quantity;
    public $items = [];
    // public $date; // Add this property to store the date input

   protected $rule=[
'name'=>'required|min:5',


   ];
    public function render()
    {
        return view('livewire.add-course');
    }
    public function updated($name) {
        $this->validateOnly($name);
    }
    public function addItem()
    {
        $this->validate(['name'=>'required|min:5',
        'type'=>'required',
        'quantity'=>'required|integer|min:1',
    ]);

        if ($this->name && $this->type && $this->quantity) {
            $this->items[] = [
                'name' => $this->name,
                'type' => $this->type,
                'quantity' => $this->quantity . ' grams',
            ];


            // Clear the input fields
            $this->name = '';
            $this->type = '';
            $this->quantity = '';
        } else {
            session()->flash('error', 'Please fill all fields before adding an item.');
        }
    }

    public function createCourse()
    {
            // Create a new course
            $cours = cour::create([
                'user_id' => Auth::id(),
                // 'name' => $this->courseName,
                // 'description' => $this->courseDescription,
                'date' => now(), // or use a specific date input
            ]);

            // Create new produits related to the course
            foreach ($this->items as $item) {
                Produit::create([
                    'nom' => $item['name'],
                    'detaille' => $item['quantity'], // Assuming detaille is meant to store quantity
                    'type' => $item['type'],
                    'cour_id' => $cours->id,
                ]);
            }

            session()->flash('success', 'Course created successfully with all items.');

            // Clear all fields

            $this->items = [];
        // $this->emit('Addcours');
        // $this->emitself('AffichecCours');
$this->dispatch('AffichecCours');
    }
    // public function createCourse()
    // {
    //     // Create a new course
    //     $cours = cours::create([
    //         'user_id'=>auth()->id(),
    //         // $timestamp = $this->input('date'),
    //         'date'=>'1/1/1',// Use the date input directly
    //     ]);

    //     // Create a new produit related to the course
    //     $produit = produit::create([
    //         'nom' => $this->itemName,
    //         'detaille' => $this->itemQuantity, // Assuming detaille is meant to store quantity
    //         'type' => $this->itemType,
    //         'cour_id' => $cours->id,
    //     ]);
    // }
}
