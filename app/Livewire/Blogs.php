<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Url;

class Blogs extends Component
{
    #[Url]
    public $categorySlug = null;


    public function render()
    {
        $categories = \App\Models\Category::orderBy('name', 'asc')->get();
        if(!empty($this->categorySlug)) {
            $category = \App\Models\Category::where('slug', $this->categorySlug)->first();
            if(empty($category)) {
                return abort(404);

            }       
            $articles = Article::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(1)->withQueryString();
        }
        else {
            $articles = Article::orderBy('created_at', 'desc')->paginate(1);
        }
        $latestArticles = Article::orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.blogs', compact('articles','categories','latestArticles'));
    }
}
