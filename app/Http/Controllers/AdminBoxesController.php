<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Author;
use App\Title;
use App\Paper;

class AdminBoxesController extends Controller
{
    //
    public function index(){

        $authors = Author::all();
        $papers = Paper::all();
        $titles = Title::all();
        $teachers = Teacher::all();

        $lt_author = Author::latest()->first();
        $lt_paper = Paper::latest()->first();
        $lt_title = Title::latest()->first();
        $lt_teacher = Teacher::latest()->first();

        $lt5_papers = Paper::orderBy('id', 'desc')->limit(5)->get();

        return view('admin.index', compact('authors', 'papers', 'titles', 'teachers', 'lt5_papers', 'lt_author', 'lt_paper', 'lt_title', 'lt_teacher'));

    }
}
