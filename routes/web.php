<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

Route::view('/', 'home');
Route::view('contact-us', 'contact');
Route::view('about', 'about');

Route::get('customers', [CustomersController::class, 'list']);


// Blade is the rendering engine for Laravel. It allows you to create dynamic content using PHP syntax within your HTML files. Blade templates are stored in the `resources/views` directory and have a `.blade.php` file extension.
// The `view` function is used to return a view instance. It takes the name of the view as its first argument and an optional array of data as its second argument. The data will be passed to the view and can be accessed using Blade syntax.
// The `get` method is used to define a route that responds to HTTP GET requests. It takes the URI as its first argument and a callback function or controller method as its second argument. In this case, the `CustomersController` class is used to handle the request for the `/customers` URI.   