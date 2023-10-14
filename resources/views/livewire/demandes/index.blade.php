            
        <div>
        
            @if ($currentPage==PAGEMESDEMANDES)
               @include("livewire.user.armateur.mesdemandes")
            @endif

            @if ($currentPage==PAGENEWDEMANDE)
              
               @include("livewire.demandes.new-demande")
            @endif
        
        </div>    
