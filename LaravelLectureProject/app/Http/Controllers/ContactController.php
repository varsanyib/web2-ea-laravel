<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create() { return view('contact'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'subject'=>'required|string|max:255',
            'body'=>'required|string',
        ]);
        $data['user_id'] = Auth::id();
        Message::create($data);
        return redirect()->route('contact')->with('status','ok');
    }
}
