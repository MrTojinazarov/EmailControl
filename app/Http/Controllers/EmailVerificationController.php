<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\EmailVerification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
{

    public function index()
    {
        //
    }

    public function check(Request $request)
    {
        $data = $request->validate([
            'verification_code' => 'required|integer',
        ]);
    
        $user = Auth::user();
    
        $verification = EmailVerification::where('email', $user->email)
            ->where('code', $data['verification_code'])
            ->first();
    
        if ($verification) {
            $verification->update(['is_verified' => true]);
            $user->update(['email_verified_at' => Carbon::now()]);

            return redirect()->route('main.page');
        }
    }

    public function store(Request $request)
    {
    }
    
    public function sendcode()
    {
        $code = random_int(111111, 999999);
        $user = Auth::user();
        EmailVerification::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'code' => $code,
        ]);

        $data = [
            'title' => 'Verify code',
            'description' => 'Email verify code',
            'text' => 'Quidagi kodni kiriting:' . $code,
        ];
    
        Mail::to($user->email)->send(new SendMessage($data));
        
        return view('auth.verify');

    }

    public function destroy(EmailVerification $email_Vertification)
    {
        //
    }
}
