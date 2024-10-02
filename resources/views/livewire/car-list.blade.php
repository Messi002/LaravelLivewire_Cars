<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Laravel bla bla</h2>

                </div>
                <div class="col">
                    <a href="/add/new" wire:navigate class="btn btn-success btn-sm float-end">Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Engine Capacity</th>
                        <th scope="col">Fuel Type</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $item)
                        <tr>
                            <td scope="row">{{ $item->id }}</th>
                            <td>{{ $item->car_name }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>{{ $item->engine_capacity }}</td>
                            <td>{{ $item->fuel_type }}</td>
                            <td><a href="/edit/car/{{ $item->id }}" wire:navigate
                                    class="btn btn-primary btn-sm">Edit</a></td>
                            <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $item->id }})"
                                    wire:confirm="Are you sure you want to delete this">Delete</button></td>
                            <td>
                              <div role="status" class="spinner-grow" wire:loading wire:target="delete({{ $item->id }})">
                                <span class="visually-hidden">Loading...</span>
                              </div>

                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            {{-- <div x-data="{ count: 0}">
              <h2 x-text="count"></h2>
              <button x-on:click="count++">+</button>
            </div> --}}
        </div>
    </div>
</div>
