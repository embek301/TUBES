<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CompanyProfileController extends Controller
{
    public function __invoke(Request $request)
    {

        $pageTitle = 'CompanyProfile';
        return view('company', compact('pageTitle'));

    }
}