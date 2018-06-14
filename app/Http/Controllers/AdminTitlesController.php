<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TitlesRequest;
use App\Http\Requests\TitlesEditRequest;
use App\Title;

class AdminTitlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titles = Title::all();

        return view('admin.titles.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TitlesRequest $request)
    {
        //
        $input = $request->all();
        
        Title::create($input);

        Session::flash('created_title', 'Se ha generado una nueva carrera.');

        return redirect('/admin/titles');
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
        $title = Title::findOrFail($id);

        $papers = $title->paper;

        return view('admin.titles.show', compact('title', 'papers'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = Title::findOrFail($id);

        return view('admin.titles.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TitlesEditRequest $request, $id)
    {
        //
        $title = Title::findOrFail($id);

        $input = $request->all();

        $title->update($input);

        Session::flash('updated_title', 'Se actualizó la carrera.');

        return redirect('/admin/titles');
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
        $title = Title::findOrFail($id);

        $title->delete();

        Session::flash('deleted_title', 'Se eliminó la carrera');

        return redirect('/admin/titles');
    }
}
