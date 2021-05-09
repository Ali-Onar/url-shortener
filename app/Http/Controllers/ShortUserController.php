<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShortUserController extends Controller
{
    public function index()
    {
        $links = auth()->user()->links()->paginate(5);

        return view('links.index', compact('links'));
    }
}
