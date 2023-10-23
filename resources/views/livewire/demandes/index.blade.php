            
        <div>
        
            @if ($currentPage==PAGEMESDEMANDES)
               @include("livewire.user.armateur.mesdemandes")
            @endif

            @if ($currentPage==PAGENEWDEMANDE)
              
               @include("livewire.demandes.model-form")
            @endif
        
        </div>    
