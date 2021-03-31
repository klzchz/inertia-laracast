<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {   
        $name = "Lucas Souza de Andrade";
        return Inertia::render('Dashboard/Index',compact('name'));
    }
}
