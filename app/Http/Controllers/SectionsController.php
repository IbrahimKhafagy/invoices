<?php

namespace App\Http\Controllers;

use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sections = sections::all();
        return view('sections/sections',compact('sections'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'section_name' => 'required|unique:sections|max:255',

        ],[

            'section_name.required'=>'يرجى ادخال اسم القسم',
            'section_name.unique'=>'اسم القسم مسجل مسبقاً',
        ]);

        sections::create([
            'section_name'=> $request ->section_name,

            'created_by'=> (Auth::user()->name)
        ]);

        session()->flash('Add','تم اضافة القسم بنجاح');
        return redirect('sections/sections');


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sections $sections)

    {
        $id = $request->id;

        $this->validate($request, [

            'section_name' => 'required|max:255|unique:sections,section_name,'.$id,

        ],[

            'section_name.required' =>'يرجي ادخال اسم القسم',
            'section_name.unique' =>'اسم القسم مسجل مسبقا',


        ]);

        $sections = sections::find($id);
        $sections->update([
            'section_name' => $request->section_name,

        ]);

        session()->flash('edit','تم تعديل القسم بنجاج');
        return redirect('sections/sections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        sections::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('sections/sections');
    }
}
