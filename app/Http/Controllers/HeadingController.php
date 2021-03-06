<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Heading;
use App\Images;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headings = Heading::all();
        $images = Images::where('id', 1)->get();
        return view('subscriber.headings.index', compact('headings', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriber.headings.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//
//        $heading = new Heading();
//        $heading->products = $request['products'];
//        $heading->pricing = $request['pricing'];
//        $heading->specials = $request['specials'];
//        $heading->created_at = date('Y-m-d H:i:s');
//        $heading->updated_at  =  date('Y-m-d H:i:s');
//        $heading->save();
//        return redirect('/subscriber/headings');
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
        //
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


        $headings = Heading::findOrFail($id);
        $headings->update($request->all());
        session()->flash('updated', 'Updated');
        return redirect('/subscriber/headings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headings = Heading::findOrFail($id);
        $headings->delete();
        return redirect('/subscriber/headings');
    }

}
