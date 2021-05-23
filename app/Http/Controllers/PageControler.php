<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControler extends Controller
{
    public function pb(Request $request)
    {
        $version=$request->input("version");
        
        return view('pk', [
            'version'=>$version
        ]);
    }
}
