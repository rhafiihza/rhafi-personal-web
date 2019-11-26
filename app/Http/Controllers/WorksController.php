<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Works;

class WorksController extends Controller
{
    public function index()
    {
        $data = \App\Works;
        return view('works.index', ['data' => $data]);
    }
}
