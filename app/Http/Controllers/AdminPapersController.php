<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PapersRequest;
use App\Http\Requests\PapersEditRequest;
use Illuminate\Support\Facades\Session;
use App\Paper;
use App\Title;
use App\Teacher;
use App\Author;
use App\Photo;

class AdminPapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papers = Paper::all();

        return view('admin.papers.index', compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers = Teacher::pluck('nombre', 'id')->all();

        $titles = Title::pluck('nombre', 'id')->all();

        return view('admin.papers.create', compact('teachers', 'titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PapersRequest $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        // $author = [
        //     'nombre' => $request->nombre,
        //     'apellidos' => $request->apellidos
        // ];

        $paper = Paper::create($input);
        $author = Author::create($input);
        //Sincroniza el autor con la tesis en la tabla pivote. Permite agregar un autor al crear la tesis
        $author->papers()->sync($paper->id);

        // Author::create($author);

        // $paper->author()->save($author);

        Session::flash('created_paper', 'Se ha agregado una nueva Tesis.');

        return redirect('/admin/papers/create'); //Redirecciona a Create para seguir agregando tesis. Cambiar cuando se termine.
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
        $papers = Paper::findOrFail($id);

        $titles = Title::pluck('nombre', 'id')->all();

        $teachers = Teacher::pluck('nombre', 'id')->all();

        return view('admin.papers.show', compact('papers', 'titles', 'teachers'));
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
        $papers = Paper::findOrFail($id);

        $teachers = Teacher::pluck('nombre', 'id')->all();

        $titles = Title::pluck('nombre', 'id')->all();

        return view('admin.papers.edit', compact('papers', 'teachers', 'titles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PapersEditRequest $request, $id)
    {
        //
        $paper = Paper::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $paper->update($input);

        Session::flash('updated_paper', 'Se actualizó la Tesis');

        return redirect('/admin/papers');
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
        $paper = Paper::findOrFail($id);

        $paper->delete();

        Session::flash('deleted_paper', 'Se ha eliminado la Tesis.');

        return redirect('/admin/papers');
    }
}
