<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use function Laravel\Prompts\table;

class DashboardController
{

    public function index()
    {
        return view('admin.dashboard'); 
    }

}
