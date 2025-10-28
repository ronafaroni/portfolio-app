<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home'); // index
    Route::get('index2', 'indexTwo')->name('indexTwo');
});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('404', 'errorPage')->name('errorPage');
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('contact', 'contact')->name('contact');
    Route::get('project-details', 'projectDetails')->name('projectDetails');
    Route::get('projects', 'projects')->name('projects');
    Route::get('projects-masonry', 'projectsMasonry')->name('projectsMasonry');
    Route::get('services', 'services')->name('services');



    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('cart', 'cart')->name('cart');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::get('chef-details', 'chefDetails')->name('chefDetails');
    Route::get('chef', 'chef')->name('chef');
    Route::get('contact', 'contact')->name('contact');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('history', 'history')->name('history');
    Route::get('menu-burger', 'menuBurger')->name('menuBurger');
    Route::get('menu-chicken', 'menuChicken')->name('menuChicken');
    Route::get('menu-grill', 'menuGrill')->name('menuGrill');
    Route::get('menu-pizza', 'menuPizza')->name('menuPizza');
    Route::get('menu-restaurant', 'menuRestaurant')->name('menuRestaurant');
    Route::get('menu-sea', 'menuSea')->name('menuSea');
    Route::get('product-details', 'productDetails')->name('productDetails');
    Route::get('shop', 'shop')->name('shop');
    Route::get('product-details', 'productDetails')->name('productDetails');
});
