<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Job;
use App\Models\Message;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class MessageController extends Controller
{
    public function index(Request $request)
    {
//        dd($_GET);
        /**@var Candidate $user*/
        $user = Auth::user();
        $applications = $user->applications()->get();
        $user->load([
            'sentMessages' => function ($query) use ($request) {
                $query->where('to_id', $request->get('id'));
            },
            'getMessages' => function ($query) use ($request) {
                $query->where('from_id', $request->get('id'));
            }
        ])->get();

        $messages = $user->sentMessages;
        $messages = $messages->merge($user->getMessages);
        $messages = $messages->sortBy('id');
        return view('frontend.company.messages.index',compact('messages','applications'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'to_id' => ['required'],
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
        $input['from_id'] = Auth::id();
        Message::create($input);
        return redirect(asset('company/messages?id='.$request->to_id));

    }

    public function update(Request $request, Job $job)
    {
        //
    }
}
