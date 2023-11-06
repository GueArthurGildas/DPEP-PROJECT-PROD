            
        <div>
        
            @if ($currentPage==PAGEMESDEMANDES)
               @include("livewire.user.armateur.mesdemandes")
            @endif


            @if ($currentPage==PRESENTDEMANDES)
               @include("livewire.demandes.present-demande")
            @endif


            @if ($currentPage==PAGENEWDEMANDE)
              
               @include("livewire.demandes.model-form")
            @endif
        
        </div>    
