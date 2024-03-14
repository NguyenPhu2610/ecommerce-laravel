<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    //Set the locale
    public function lang($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
