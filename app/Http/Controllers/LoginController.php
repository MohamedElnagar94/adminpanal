<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $data = [
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            // 'remember_token' => request('rememberme')
        ];
        $rememberme = request('rememberme') == 1 ? true : false ;
        if (Auth::guard('admin')->attempt($data,$rememberme)) {
            // dd(Auth::guard('admin')->attempt($data,$rememberme));
            // sleep(4);
            return redirect('/admin');
        } else {
            // dd(Auth::guard('admin')->attempt($data,$rememberme));
            return back();
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
