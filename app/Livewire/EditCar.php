<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class EditCar extends Component
{
    public $is_flash_showing = false;
    public $car_id;

    public Car $car_data;

    public $car_name = '';
    public $brand = ''; 
    public $engine_capacity = '';
    public $fuel_type = '';

    public function mount($id){
        $this->car_id = $id;
 
        $this->car_data = Car::where('id', $id)->first();

        $this->car_name = $this->car_data->car_name;
        $this->brand = $this->car_data->brand;
        $this->engine_capacity = $this->car_data->engine_capacity;
        $this->fuel_type = $this->car_data->fuel_type;

    }

    public function update(){
        $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
        ]);

       try {
        $new_car = Car::where('id',$this->car_id)->update([
            'car_name' => $this->car_name,
            'brand' => $this->brand,
            'engine_capacity' => $this->engine_capacity,
            'fuel_type' => $this->fuel_type,
        ]);
        // session()->flash('message', 'Car added successfully!');
        // $this->is_flash_showing = true;


        return $this->redirect('/carlists', navigate: true);

       } catch (\Exception $e) {
        //throw $th;
        dd($e);
       }
    }
    public function render()
    {
        return view('livewire.edit-car');
    }
}
