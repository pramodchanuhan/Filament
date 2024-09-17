<?php

use App\Livewire\BLogDetail;
use App\Livewire\Blogs;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', ShowHome::class)->name('home');
Route::get('/showservices', ShowServicePage::class)->name('showservicepage');
Route::get('/showservice/{id}', ShowService::class)->name('showservice');
Route::get('/team', ShowTeamPage::class)->name('showteampage');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/blog/{id}', BLogDetail::class)->name('blogdetail');
Route::get('/faqs',ShowFaqPage::class)->name('faqs');
Route::get('/page/{id}',ShowPage::class)->name('page');
Route::get('/contact',ShowContactPage::class)->name('contact');



