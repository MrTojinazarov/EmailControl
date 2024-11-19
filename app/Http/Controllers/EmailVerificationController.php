<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\Email_Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
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
    }
    
    public function sendcode()
    {
        $code = random_int(111111, 999999);
        $user = Auth::user();
        Email_Verification::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'code' => $code,
        ]);

        $data = [
            'code' => $code,
            'title' => 'Verify code',
            'description' => 'Email verify code',
            'text' => 'Quidagi kodni kiriting!',
        ];
    
        Mail::to($user->email)->send(new SendMessage($data));
        
    }

    public function destroy(Email_Verification $email_Vertification)
    {
        //
    }
}
