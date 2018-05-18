<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\Mail\WelcomeAgain;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

        // Create and save the user

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        // Sign them in

        auth()->login($user);

        // Send Welcome Email

        Mail::to($user)->send(new WelcomeAgain());


        // flash a message

        session()->flash('message' , 'Thank you for joining us');

        // Redirect to the home page

        return redirect()->home();
    }
}
