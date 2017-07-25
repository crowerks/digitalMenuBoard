<?php

namespace App\Http\Controllers;
use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Pricing::all();
        return view('subscriber.pricing.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriber.pricing.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prices = new Pricing();
        $prices->size = $request['size'];
        $prices->price = $request['price'];
        $prices->created_at = date('Y-m-d H:i:s');
        $prices->updated_at  =  date('Y-m-d H:i:s');
        $prices->save();
        return redirect('/subscriber/pricing');
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
        $prices = Pricing::findOrFail($id);
        $prices->update($request->all());
        session()->flash('updated', 'Updated');
        return redirect('/subscriber/pricing');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prices = Pricing::findOrFail($id);
        $prices->delete();
        return redirect('/subscriber/pricing');
    }
}
