<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Works;

class WorksController extends Controller
{
    public function index()
    {
        $works = Works::all();
        return view('works.index', ['works' => $works]);
        // return view('works.index');
    }
}
