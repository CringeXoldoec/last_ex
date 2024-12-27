<?php

namespace App\Http\Controllers;

use App\Models\Requesting;
use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
    public function index()
    {
        $options = Requesting::all();
        return view('admin.edit', compact('options'));
    }

    public function update(Requesting $option)
    {
        $status = [
            'new' => 'start',
            'start' => 'end',
            'end' => 'end'
        ];
        $option->update(['status' => $status[$option->status]]);
        return redirect()->back();
    }
}
