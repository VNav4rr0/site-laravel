<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}

Route::get('/', function () {
    return view('contato');
});
Route::get('/', function () {
    return view('sobre');
});
Route::get('/', function () {
    return view('blog');
});

