<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeachersRequest;
use App\Http\Requests\TeachersEditRequest;
use App\Teacher;
use App\Paper;
use App\Photo;

class AdminTeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::all();

        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeachersRequest $request)
    {
        //
        $input = $request->all();

        Teacher::create($input);

        Session::flash('created_teacher', 'Se ha agregado un nuevo docente.');

        return redirect('admin/teachers');
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
        $teacher = Teacher::findOrFail($id);

        $papers = $teacher->paper;

        return view('admin.teachers.show', compact('teacher', 'papers'));
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
        $teacher = Teacher::findOrFail($id);

        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeachersEditRequest $request, $id)
    {
        //
        $teacher = Teacher::findOrFail($id);

        $input = $request->all();

        $teacher->update($input);

        Session::flash('updated_teacher', 'Se ha actualizado al docente');

        return redirect('/admin/teachers');
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
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        Session::flash('deleted_teacher', 'Se ha eliminado al docente.');

        return redirect('/admin/teachers');
    }
}
