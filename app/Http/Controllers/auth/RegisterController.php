<?php

namespace App\Http\Controllers\Auth;

use App\Models\admin\Candidate;
use App\Http\Controllers\admin\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    public function __construct()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'mail' => ['required'],
            'password' => ['required'],
            'birth_date' => ['required']
        ]);
        $candidate = new Candidate();

        $candidate->fill(['name' => $request->input('name')]);
        $candidate->fill(['surname' => $request->input('surname')]);
        $candidate->fill(['mail' => $request->input('mail')]);
        $candidate->fill(['password' => $request->input('password')]);
        $candidate->fill(['birth_date' => $request->input('birth_date')]);
        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'mail' => ['required'],
            'password' => ['required'],
            'birth_date' => ['required']
        ]);
        $candidate->update(['name' => $request->input('name')]);
        $candidate->update(['surname' => $request->input('surname')]);
        $candidate->update(['mail' => $request->input('jobs_count')]);
        $candidate->update(['password' => $request->input('password')]);
        $candidate->update(['birth_date' => $request->input('birth_date')]);
        return redirect()->route('.admin.candidate.index', ['book' => $candidate]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($candidate)
    {
        $candidate->delete();
        return redirect('/');
    }
}
