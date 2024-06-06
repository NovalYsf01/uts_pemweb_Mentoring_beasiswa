<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db_uts;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('index', compact('gurus'));
    }
}
