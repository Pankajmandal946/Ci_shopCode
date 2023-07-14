<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function home()
    {
        return view("include/header")
            . view("include/navbar")
            . view("include/sidebar")
            . view("pages/home")
            . view("include/footerJs")
            . view("include/footer");
    }
}
