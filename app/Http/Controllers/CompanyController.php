<?php

namespace App\Http\Controllers;

use App\Model\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Show company home page
     *
     * @param string $company_domain
     * @return \Illuminate\Http\Response
     */
    public function index(string $company_domain)
    {
        $company = Company::where('domain', '=', $company_domain)->first();
        return response()->view('etm_layout.companies.index', compact('company'));
    }

    public function show()
    {
        return response()->view('etm_layout.companies.show');
    }
}
