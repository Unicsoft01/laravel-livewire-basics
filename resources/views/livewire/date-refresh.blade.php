<div>
   <h3>
    the current time is {{ time() }}
   </h3>
{{-- magic method to reload only the component --}}
   <button wire:click='$refresh'>reload</button>
</div>
