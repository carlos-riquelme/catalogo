<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Author;
use App\Paper;
use App\Teacher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all();
        $authors = Author::all();
        $papers = Paper::all();
        $teachers = Teacher::all();

        $lt_author = Author::latest()->first();
        $lt_paper = Paper::latest()->first();
        $lt_title = Title::latest()->first();
        $lt_teacher = Teacher::latest()->first();

        $lt5_papers = Paper::orderBy('id', 'desc')->limit(5)->get();

        return view('home', compact('titles', 'authors', 'papers', 'teachers', 'lt5_papers', 'lt_author', 'lt_paper', 'lt_title', 'lt_teacher'));
    }
}
