<?php

namespace App\Http\Controllers;

use App\Models\Polling_Unit;
use App\Models\Lga;
use App\Models\Announced_pu_Result;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }



    }
