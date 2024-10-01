<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel bla bla</h2>

                </div>
                <div class="col">
                    <a href="/carlists" wire:navigate class="btn btn-primary btn-sm float-end">Car List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit="saveCar" method="post">
                <div class="mb-3">
                    <label for="car_name" class="form-label">Car Name</label>
                    <input type="text" wire:model="car_name" class="form-control" id="car_name" placeholder="Lamborghini Urus">
                    @error('car_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" wire:model="brand" class="form-control" id="brand" placeholder="Lamborghini">
                    @error('brand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="engine_capacity" class="form-label">Engine Capacity</label>
                    <input type="text" wire:model="engine_capacity" class="form-control" id="engine_capacity" placeholder="4.0L">
                    @error('engine_capacity')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Type</label>
                    {{-- <input type="text" class="form-control" id="fuel_type" placeholder="Petrol"> --}}
                    <select name="fuel_type" wire:model="fuel_type" class="form-select" id="fuel_type">
                        <option selected>Select Fuel Type</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Electric">Electric</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                    @error('fuel_type')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>

    @if (session()->has('message'))
    <div>{{ session('message') }}</div>
@endif
</div>
