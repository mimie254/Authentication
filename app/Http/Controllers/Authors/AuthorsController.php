<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Author::all();
        return view('authors.index',['authors'=>$data]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
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
            'name'=>['required','min:5','max:10'],
            'nationality'=>'required'
        ]);
        Author::create($request->all());
       return redirect()->route('authors.index')->with('status','author added successfully');
       
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Author::find($id);
        return view('authors.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $data=Author::find($request->id);
        $data->name=$request->name;
        $data->nationality=$request->nationality;
        $data->no_of_books_published=$request->no_of_books_published;
        $data->awards_won=$request->awards_won;
        $data->best_selling_book=$request->best_selling_book;
        $data->reviews=$request->reviews;
        $data->save();
        return redirect()->route('authors.index')->with('status','author edited successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id )
    {
       $data=Author::find($id);
       $data->delete($id);
       return redirect()->route('authors.index')->with('status','author details deleted');

    }

}