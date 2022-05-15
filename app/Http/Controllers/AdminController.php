<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->get();

        return view('admin.index', compact('siswas'));
    }
}
