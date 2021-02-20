<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function myQuestion()
    {
        $idUser = Auth::user()->id;
        $questions = Question::where('user_id', $idUser)->get();
        return view('dashboard', compact('questions'));
    }
}
