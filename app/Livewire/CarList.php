<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarList extends Component
{

    public $all_cars;

    public function mount(){
        $this->loadCars();  
    }

    public function delete($id){
        $car = Car::find($id);

        if ($car) {
            $car->delete();   // Only delete if the car is found
        }

        // Refresh the car list
        $this->loadCars();
    }

    private function loadCars(){
        $this->all_cars = Car::all();   
    }

    public function render()
    {
        return view('livewire.car-list', [
            'cars' => $this->all_cars,
        ]);
    }

}
