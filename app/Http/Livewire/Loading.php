<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

use Livewire\WithPagination;

class Loading extends Component
{
    public $loading = true;

    public function mount()
    {
        // Simulate a delay of 3 seconds to show the loading page
        sleep(3);
        //$this->loading = false;
    }


    public function render()
    {
        return view('livewire.loading')
        ->extends("layouts.master")
        ->section("content");
    }


    public function loadingPage(){
        sleep(3);
        $this->loading = false;
    }
}
