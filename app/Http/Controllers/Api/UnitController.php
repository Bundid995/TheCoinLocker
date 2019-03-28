<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = unit::all();
        return response()->json($units);
    }
}
