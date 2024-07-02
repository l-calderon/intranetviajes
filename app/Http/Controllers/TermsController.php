<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    public function show()
    {
        return view('terms');
    }

    public function accept(Request $request)
    {
        $user = auth()->user();
        $user->accepted_terms = true;
        $user->save(); // Aquí debería funcionar el método save()

        return redirect()->intended('dashboard');
    }
}
