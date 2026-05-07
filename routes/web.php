<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



Route::view('/', 'welcome')->name('home');

Route::post('/subscribe', [MailController::class, 'subscribeGuest'])->name('subscribe');
Route::post('/apply', [MailController::class, 'applicantForm'])->name('apply.submit');
Route::post('/notify', [MailController::class, 'contactNotify'])->name('contact.notify');

Route::view('/about', 'about')->name('about');
Route::view('/destination', 'destination')->name('destination');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/blog/post', 'post')->name('post');

Route::view('/services', 'services')->name('services');
Route::view('/applicants', 'application', ['destination' => 'Application Segment'])->name('applicants');

Route::view('/thank-you', 'thanks')->name('thanks');
Route::view('/error', 'errors')->name('error');

Route::get('/verify/{token}', [MailController::class, 'verifySubscriber']);



Route::get('/destination/{slug}', function ($slug) {
    return view('destination.usa', [
        'slug' => $slug,
        'destination' => ucfirst(str_replace('-', ' ', $slug))
    ]);
})->name('travels.show');

Route::get('/create-admin', function () {
    User::create([
        'name' => 'Isreal Odedeyi',
        'email' => 'isrealodedeyi@gmail.com',
        'password' => Hash::make('Maestro123@'),
    ]);
    return "User created successfully!";
});