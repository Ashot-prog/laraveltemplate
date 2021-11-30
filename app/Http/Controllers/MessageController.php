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
//        dd($_GET);
        $company = Auth::user();
        $messages = $company->messages()->where('candidate_id', $_GET['id'])->get();
        return view('frontend.company.messages.index',compact('messages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => ['required'],
            'message' => ['required']
        ]);
        $input = $request->except('_token', 'posters');
        if ($request->hasFile('files')) {
            $file = $request->file('files');
            $image = [];
            $file_name = rand(1, 9999) . $file->getClientOriginalName();
            array_push($image, $file_name);
            $file->move(public_path() . '/images', $file_name);
            $input['posters'] = json_encode($image);
        }else{
            $input['posters']='';
        }
        $input['company_id'] = Auth::id();
        Message::create($input);
        return redirect(asset('company/messages?id='.$request->candidate_id));

    }

    public function update(Request $request, Job $job)
    {
        //
    }
}
