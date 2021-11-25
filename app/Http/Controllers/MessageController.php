<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Message;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class MessageController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->except('_token','posters');
        if ($request->hasFile('posters')){
            $files = $request->file('posters');
            $image=[];

            foreach ($files as $file){
                $file_name = rand(1,9999).$file->getClientOriginalName();
                array_push($image,$file_name);
                $file->move(public_path().'/images', $file_name);
            }
            $input['posters']= json_encode($image);
        }
        $input['company_id']=Auth::id();
        Message::create($input);
        return redirect(asset($input['url']));

    }

    public function update(Request $request, Job $job)
    {
       //
    }
}
