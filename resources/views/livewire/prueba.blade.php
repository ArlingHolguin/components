<div>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6">
            <button wire:click="inicio" class="cursor-pointer bg-blue-900 mx-2 px-4 py-1 text-white rounded text-sm hover:bg-blue-800">Inicio</button>
            <button wire:click="medio" class="cursor-pointer bg-blue-900 mx-2 px-4 py-1 text-white rounded text-sm hover:bg-blue-800">Medio</button>
            <button wire:click="final" class="cursor-pointer bg-blue-900 mx-2 px-4 py-1 text-white rounded text-sm hover:bg-blue-800">Final</button>
        </div>
    </div>

    <div class="mt-4 bg-white p-2 rounded shadow-md text-sm px-6">
       @if ($isOpen == true)
       <div wire:model="isOpen">
           Inicio
       </div>
        
       @endif
      @if ($isOpen == true)
      <div wire:model="isOpen">
          Medio
      </div>
        
      @endif
     @if ($isOpen == true)
        
     <div wire:model="isOpen">
         Final
     </div>
     @endif
    </div>
</div>
