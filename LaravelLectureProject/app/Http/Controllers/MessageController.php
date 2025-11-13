<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $query = Message::latest();

        if (Auth::user()?->role !== 'admin') {
            $query->where('user_id', Auth::id());
        }

        $messages = $query->paginate(20);

        return view('messages.index', compact('messages'));
    }
}
