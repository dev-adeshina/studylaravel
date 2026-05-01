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

Route::view('/destination/new_zeeland', 'destination.new_zeeland', ['destination' =>  ucfirst('New Zeeland')])->name('travels.new_zeeland');
Route::view('/destination/canada', 'destination.canada', ['destination' =>  ucfirst('canada')])->name('travels.canada');
Route::view('/destination/uk', 'destination.uk', ['destination' =>  ucfirst('uk')])->name('travels.uk');
Route::view('/destination/ireland', 'destination.ireland', ['destination' =>  ucfirst('ireland')])->name('travels.ireland');
Route::view('/destination/australia', 'destination.australia', ['destination' =>  ucfirst('australia')])->name('travels.australia');
Route::view('/destination/usa', 'destination.usa', ['destination' =>  ucfirst('United State od America')])->name('travels.usa');
Route::view('/destination/europe', 'destination.europe', ['destination' =>  ucfirst('europe')])->name('travels.europe');
Route::view('/destination/dubai', 'destination.dubai', ['destination' =>  ucfirst('dubai')])->name('travels.dubai');


Route::get('/create-admin', function () {
    User::create([
        'name' => 'Admin Test',
        'email' => 'test@studyglidedu.com',
        'password' => Hash::make('password123'),
    ]);
    return "User created successfully!";
});