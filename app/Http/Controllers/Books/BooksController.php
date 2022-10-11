<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_list;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Book_list::all();
        return view ('books.index',['books'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
        
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
            'title'=>['required','min:5','max:10'],
            'author'=>'required'
        ]);

        Book_list::create($request->all());
        //dd($request->all());
        return redirect()->route('books.index')->with('status','book added successfully');
        
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
        $data= Book_list::find($id);
        return view('books.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Book_list::find($request->id);
        $data->title=$request->title;
        $data->author=$request->author;
        $data->year_of_publish=$request->year_of_publish;
        $data->cover_photo=$request->cover_photo;
        $data->categories=$request->categories;
        $data->remarks=$request->remarks;
        $data->save();
        return redirect()->route('books.index')->with('status','book edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data=Book_list::find($id);
        $data->delete($id);
        return redirect()->route('books.index')->with('status','book deleted');
    }
}
