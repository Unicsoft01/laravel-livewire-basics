<div>
{{-- magic method to reload only the component --}}
   <div class="card my-2">
    <h5 class="card-header">Livewire</h5>
    <div class="card-body">
      <h5 class="card-title"> the current time is </h5>
      <p class="card-text">{{ time() }} and {{ date('y:m:d h:m:s') }}.</p>
      <a href="#" class="btn btn-primary"  wire:click='$refresh'>Refresh time</a>
    </div>
  </div>
</div>
