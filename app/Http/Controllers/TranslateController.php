<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TranslateController extends Controller
{
    public function translate(){
        
    }

    public function changeLanguage($locale){
        if (in_array($locale, ['en', 'it'])) {
            App::setLocale($locale);
        }
        return redirect()->back();
    }
}

