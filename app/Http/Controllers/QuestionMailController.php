<?php

namespace App\Http\Controllers;

use App\Mail\AnswerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionMailController extends Controller
{

    public function send(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        Mail::to($request->email)->send(new AnswerMail($request->message));


        return back()->with('success', 'Answer submitted');
    }

}
