<?php

namespace App\Controllers;

class TurkishController extends BaseController
{
    public function index(): string
    {
        $data = [
            'logo' => 'whiteLogo.png',
        ];
        return view('index', $data);
    }
    public function capabilities(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('capabilities', $data);
    }
    public function contact_us(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('contact-us', $data);
    }
    public function how_it_works(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('how-it-works', $data);
    }
    public function our_work(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('our-work', $data);
    }
    public function privacy_policy(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('privacy-policy', $data);
    }
    public function who_we_are(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('who-we-are', $data);
    }
}
