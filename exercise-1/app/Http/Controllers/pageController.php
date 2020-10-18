<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getHomePage()
    {
        return view('content-page')
            ->with('title', 'Home Page')
            ->with('theme', 'light')
            ->with('show_footer', true)
            ->with('footer_text', 'Home Footer');
    }

    public function getContactPage()
    {
        return view('content-page')
            ->with('title', 'Contact Page')
            ->with('theme', 'dark')
            ->with('show_footer', false);
    }

    public function getAboutPage()
    {
        return view('content-page')
            ->with('title', 'About Page')
            ->with('theme', 'light')
            ->with('show_footer', true)
            ->with('footer_text', 'About Footer');
    }
}
