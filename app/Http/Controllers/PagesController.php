<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // passing values into a blade template
        $title = 'Welcome to Laravel!';

        // first way of passing values into a blade template:
        // return view('pages.index', compact('title'));

        // second way of passing values into a blade template:
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        // passing values into a blade template
        $title = 'About Us';

        return view('pages.about')->with('title', $title);
    }

    public function services() {
        // passing multiple values into a blade template
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];

        return view('pages.services')->with($data);
    }
}
