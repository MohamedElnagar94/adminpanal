<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Password;
use Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\PasswordReset;
use SebastianBergmann\Environment\Console;
use function GuzzleHttp\json_decode;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.forgotpassword');
    }
    public function getreset()
    {
        return view('admin.resetpassword');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if (!$admin){
            // $data = response()->json(['message' => 'We can\'t find a Admin with that e-mail address.']);
            return back()->with(session()->flash('error','We can\'t find a Admin with that e-mail address.')); 
        }
        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $admin->email],
            ['email' => $admin->email,'token' => str_random(60)]
        );
        if ($admin && $passwordReset){
            $admin->notify(new PasswordResetRequest($passwordReset->token));
            return back()->with(session()->flash('success','We have e-mailed your password reset link!')); 
            // return response()->json(['message' => 'We have e-mailed your password reset link!']);
        }
    }

    public function find($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();
        if (!$passwordReset)
            return redirect('admin/forgotpassword')->with(session()->flash('errorfind','This password reset token is invalid.')); 
            // return response()->json(['message' => 'This password reset token is invalid.'], 404);
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return redirect('admin/forgotpassword')->with(session()->flash('resetsuccess','This password reset token is invalid.')); 
            // return response()->json(['message' => 'This password reset token is invalid.'], 404);
        }
        return view('admin.forgotpassword')
                ->with(compact('passwordReset'))
                ->with(session()->flash('resetsuccess','This password reset token is invalid.'));
        // return response()->json($passwordReset);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            // 'token' => 'required|string'
        ]);
        // $passwordReset = PasswordReset::where([['email', $request->email],['token', $request->_token]])->first();
        // $passwordReset = PasswordReset::where(['token'=> $request->_token])->first();
        $token = $request->_token;
        $email = $request->email;
        $passwordReset = PasswordReset::where(['email' => $email],['token'=> $token])->first();
        if (!$passwordReset){
            // return 'no password';
            return response()->json(['message' => 'This password reset token is invalid.'], 404);
        }
        $admin = Admin::where('email', $passwordReset->email)->first();
        if (!$admin){
            // return 'no admin';
            return response()->json(['message' => 'We can\'t find a Admin with that e-mail address.'], 404);
        }
        $admin->password = bcrypt($request->password);
        $admin->save();
        $passwordReset->delete();
        $admin->notify(new PasswordResetSuccess($passwordReset));
        // Auth::guard('admin')->login($admin,true);
        // return redirect('admin');
        return redirect('admin/login')->with(session()->flash('succeful','You are changed your password succeful.'));
        // return response()->json($Admin);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $admin = Admin::where('email',request('email'))->first();
        // // return $admin;
        // if (!empty($admin)) {
        //     $token = app('auth.password.broker')->createToken($admin);
        //     dd($token);
        //     return $token;
        // }
        // return Password::broker('email');
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
