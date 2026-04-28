<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;




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
Route::view('/destination/travels', 'travels')->name('travels');
Route::view('/services', 'services')->name('services');


Route::view('/thank-you', 'thanks')->name('thanks');
Route::view('/error', 'errors')->name('error');

Route::get('/verify{token}', [MailController::class, 'verifySubscriber']);