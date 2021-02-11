<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::all();

        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors=[
            'red'=>'color rojo',
            'yellow'=>'color amarillo',
            'green'=>'color verde',
            'blue'=>'color azul',
            'indigo'=>'color indigo',
            'green'=>'color verde',
            'purple'=>'color morado',
            'pink'=>'color rosado'
        ];

        return view('admin.tags.create',compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:tags',
            'color'=>'required'
        ]);

        $tag=Tag::create($request->all());

        return redirect()->route('admin.tags.edit',compact('tag'))->with('info','Se guardo exitosamente la información');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $colors=[
            'red'=>'color rojo',
            'yellow'=>'color amarillo',
            'green'=>'color verde',
            'blue'=>'color azul',
            'indigo'=>'color indigo',
            'green'=>'color verde',
            'purple'=>'color morado',
            'pink'=>'color rosado'
        ];

        return view('admin.tags.edit',compact('tag','colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tag $tag)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:tags,slug,$tag->id",
            'color'=>'required'
        ]);
        
        $tag->update($request->all());


        return redirect()->route('admin.tags.edit',$tag)->with('info','Se actualizo exitosamente la información');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('info','Se elimino exitosamente la información');
    }
}
