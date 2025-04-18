<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required' , 'min:5' ,'max:255'],
            'email' => ['required' , 'max:255' , 'email' , 'unique:users'],
            'password' => ['required' , 'confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
            ],
            [
                'name.required' => 'نام و نام خانوادگی خود را وارد نمایید!',
                'name.max' => 'نام و نام خانوادگی باید حدااکثر 225 کارکتر باشد!',
                'name.min' => 'نام و نام خانوادگی باید حدااقل 5 کارکتر باشد!',
                'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
                'email.max' => 'ایمیل مورد نظر حداکثر باید ۲۵۵ کارکتر باشد!',
                'email.email' => 'ایمیل معتبر وارد نمایید!',
                'email.unique' => 'قبلا کاربری با این ایمیل ثبت نام کرده است!',
                'password.required' => 'کلمه عبور خود را وارد نمایید!',
                'password.min' => 'کلمه عبور باید حداقل 8 کارکتر باشد!',
                'password.confirmed' => 'کلمه عبور با تکرار آن برابر نیست!',
                'password.mixed' => 'کلمه عبور باید شامل اعداد کارکتر کوچک و بزرگ و کارکترهای ويژه (!@#$%^&*) باشد!'
            ]
        );

        $user = User::create($fields);


        if (!$user) {

            return redirect()->back()->with('error' , 'مشکلی در ثبت نام شما پیش آمده است مجددا اقدام کنید!');
            
        }

        Auth::login($user);
        

        // mail to user 

        Mail::to($request->email)->send(new WelcomeMail($user , $request->password));

        //redirect
        return redirect()->route('index')->withErrors([
            'success' => auth()->user()->name . ' خوش امدید.',
        ]);

    }
}
