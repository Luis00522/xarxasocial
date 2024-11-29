<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change(Request $request)
    {
        $lang = request()->input('lang');

        Session::put('locale', $lang);

        App::SetLocale(Session::put('locale', $lang));

        return redirect()->back();
    }
}
