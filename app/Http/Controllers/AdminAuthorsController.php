<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AuthorsRequest;
use App\Http\Requests\AuthorsEditRequest;
use App\Author;
use App\Paper;

class AdminAuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = Author::all();

        // $papers = Paper::has('author')->get();

        // return view('admin.authors.index', compact('authors', 'papers'));
        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $papers = Paper::pluck('titulo','id')->all();

        return view('admin.authors.create', compact('papers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorsRequest $request)
    {
        //
        $input = $request->all();
        $author = Author::create($input);
        
        // $author->nombre = $request->nombre;
        // $author->apellidos = $request->apellidos;

        // $paper = $request->paper_id;
        
        // $paper = Paper::find($paper);

        $author->papers()->sync($request->input('paper_id'));

        // $author->save();

        Session::flash('created_author', 'Se ha agregado un nuevo autor.');

        return redirect('/admin/authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $author = Author::findOrFail($id);

        $papers = $author->paper;
        
        return view('admin.authors.show', compact('author', 'papers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $author = Author::findOrFail($id);

        $papers = Paper::pluck('titulo','id')->all();

        return view('admin.authors.edit', compact('author', 'papers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorsEditRequest $request, $id)
    {
        //
        $author = Author::findOrFail($id);

        $input = $request->all();

        $author->update($input);

        $author->papers()->sync($request->input('paper_id'));

        Session::flash('updated_author', 'Se actualizó al autor');

        return redirect('/admin/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $author = Author::findOrFail($id);

        $author->delete();

        Session::flash('deleted_author', 'Se eliminó al autor');

        return redirect('/admin/authors');
    }
}
