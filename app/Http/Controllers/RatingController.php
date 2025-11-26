<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with('user', 'penginapan')->get();
        return view('rating.index', compact('ratings'));
    }
}
