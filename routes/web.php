<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WysiwygController;
use Livewire\Volt\Volt;
use App\Models\Post;
use App\Models\WysiwygContent;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    return view('welcome', compact('posts'));
})->name('home');


Route::get('/wysiwyg', [WysiwygController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('wysiwyg');

Route::post('/wysiwyg/save', [WysiwygController::class, 'save'])
    ->middleware(['auth', 'verified']);

Route::get('dashboard', function () {
    $name = Auth::user()->name;
    $content = WysiwygContent::latest()->first()?->content ?? '';
    return view('dashboard', ['name' => $name, 'content' => $content,]);
    })->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');

Route::view('admin/posts', 'admin.posts')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.posts');

Route::view('admin/contact', 'admin.contact')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.contact');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    Volt::route('settings/language', 'settings.language')->name('settings.language');
});

require __DIR__.'/auth.php';
