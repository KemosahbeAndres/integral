<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function enrollpost(Request $request)
    {
        return redirect()->route('page.enroll');
    }
    public function contactpost(Request $request)
    {
        return redirect()->route('page.contact');
    }
}
