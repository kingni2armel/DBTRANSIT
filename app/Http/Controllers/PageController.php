<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function GETPAGEAPROPOS()

    {
        return view('pages.apropos');
    }

    public function GETPAGEEQUIPE()

    {
        return view('pages.equipe');
    }

    public function GETPAGEDEVIS()
    {
        return view('pages.devis');
    }

    public function GETPAGEBOUTIQUE()
    {
            return view('pages.boutique');
    }

    public function GETPAGEMOBILIER()
    {
        return view('pages.event');
    }
}
