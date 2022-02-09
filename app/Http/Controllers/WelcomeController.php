<?php
namespace App\http\Controllers;
use Illuminate\Support\Facades\Route;

class WelcomeController
{
    public function show() {
        return view('welcome');
    }
}
