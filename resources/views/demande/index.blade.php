            
        <div>
        
            @if ($currentPage==PAGEMESDEMANDES)
               @include("user.mesdemandes")
            @endif


            {{-- @if ($currentPage==PRESENTDEMANDES)
               @include("demande.present-demande")
            @endif --}}


            {{-- @if ($currentPage==PAGENAVIREDEMANDE)
               @include("demande.step-demande.step1")
            @endif --}}


            @if ($currentPage==PAGENEWDEMANDE)
              
               @include("livewire.demandes.model-form")
            @endif
        
        </div>    
