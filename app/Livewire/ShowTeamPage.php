<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class ShowTeamPage extends Component
{

    public function mount()
    {
        
    }
    public function render()
    {
        $teams = Member::all();
        return view('livewire.show-team-page',compact('teams'));
    }
}
