<?php

namespace App\Http\Controllers;

use App\Model\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Redirect to company home page or to welcome page
     *
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        if (!Auth::user()) {
            return view('welcome');
        };
        return response()->redirectTo('/' . Auth::user()->company->domain);
    }
}
