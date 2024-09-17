<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BLogDetail extends Component
{
    public $blogID = null;
    public function mount($id){
        $this->blogID = $id;
    }

    public function render()
    {
        $blog = Article::select('articles.*','categories.name as category_name')
        ->leftjoin('categories','categories.id','articles.category_id')
        ->findorfail($this->blogID);
        return view('livewire.b-log-detail',compact('blog'));
    }
}
