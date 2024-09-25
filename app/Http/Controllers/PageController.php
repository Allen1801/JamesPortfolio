<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function projects()
    {
        return view('projects');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function index()
    {
        return view('index');
    }


}
