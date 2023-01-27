<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class BuildingController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Building/Index');
    }
}
