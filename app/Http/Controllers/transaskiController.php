<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

class transaskiController extends Controller
{
    public function index()
    {
        $transaksi = User::all();
        return view('index', ['users' => $transaksi]);
    }
}
