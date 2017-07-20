<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Special;
class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = Special::all();
        return view('subscriber.specials.index', compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriber.specials.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $special = new Special();
        $special->special = $request['special'];
        $special->pricing = $request['pricing'];
        $special->active = 0;
        $special->created_at = date('Y-m-d H:i:s');
        $special->updated_at  =  date('Y-m-d H:i:s');
        session()->flash('created', 'Created');
        $special->save();
        return redirect('/subscriber/specials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responsed
     */
    public function update(Request $request, $id)
    {
        $specials = Special::findOrFail($id);
        $specials->update($request->all());
        session()->flash('updated', 'Updated');
        return redirect('/subscriber/specials');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specials = Special::findOrFail($id);
        $specials->delete();
        session()->flash('deleted', 'Deleted');
        return redirect('/subscriber/specials');
    }
}
