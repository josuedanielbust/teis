<?php

namespace App\Http\Controllers;

class AboutController extends Controller {
    public function index() {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Your Name';

        return view('home.about')->with('viewData', $viewData);
    }
}
