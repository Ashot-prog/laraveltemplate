<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about.about');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request){
    }
}
