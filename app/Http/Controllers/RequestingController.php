<?php

namespace App\Http\Controllers;

use App\Models\Requesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RequestingController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $role = $user->role;

        if ($role === 'admin') {
            return redirect()->route('admin');
        }

        $options = Requesting::where('user_id', Auth::id())->with('user')->get();
        return view('offer.show', compact('options'));

    }

    public function store()
    {
        $data = request()->validate([
            'adress' => 'required',
            'time' => 'required',
            'payment' => 'required'
        ]);
        $data['user_id'] = Auth::id();
        Requesting::create($data);

        return redirect()->route('home')->with(['success' => 'Заявка успешно отправлена!']);;
    }

}
