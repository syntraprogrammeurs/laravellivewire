<?php

use App\Livewire\Counter;
use App\Livewire\EditProfile;
use App\Livewire\PostCreate;
use App\Livewire\Posts;
use App\Livewire\ShowPosts;
use App\Livewire\Tasks;
use Illuminate\Support\Facades\Route;


Route::get('/counter', Counter::class);
Route::get('/', Tasks::class);
Route::get('/posts', Posts::class);
Route::get('/postcreate', PostCreate::class);
Route::get('/editprofile', EditProfile::class)->name('editp');
Route::get('/cdialog', ShowPosts::class);
