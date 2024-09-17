<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{
    public $pageID = null;

    public function mount($id)
    {
      $this->pageID = $id;
    }
    public function render()
    {
        $page = Page::findorFail($this->pageID);
        return view('livewire.show-page',compact('page'));
    }
}
