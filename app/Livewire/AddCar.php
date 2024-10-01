<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name = '';
    public $brand = ''; 
    public $engine_capacity = '';
    public $fuel_type = '';

    public function saveCar(){
        $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
        ]);

       try {
        $new_car = Car::create([
            'car_name' => $this->car_name,
            'brand' => $this->brand,
            'engine_capacity' => $this->engine_capacity,
            'fuel_type' => $this->fuel_type,
        ]);
        // session()->flash('message', 'Car added successfully!');

        return $this->redirect('/carlists', navigate: true);

       } catch (\Exception $e) {
        //throw $th;
        dd($e);
       }
    }
    public function render()
    {
        return view('livewire.add-car');
    }
}
