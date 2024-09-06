<div div class="my-2 col-md-4">
    {{-- magic method to reload only the component --}}
    <div class="card">
        <h5 class="card-header">Livewire:counter view</h5>
        <div class="card-body">
            <div class="text-center">
                <h5 class="card-title"> {{ $count }} </h5>
                <p class="card-text">update the time via huttons.</p>
            </div>

            <div class="row mx-auto">
                <div class="col-sm-6">
                    <button class="btn btn-success" wire:click="increment">+ Increase</button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-success" wire:click="decrement">+ decrease</button>
                </div>
            </div>
        </div>
    </div>
</div>
