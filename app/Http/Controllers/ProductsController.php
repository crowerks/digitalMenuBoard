<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Heading;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::where('id', '<=', 40)->orderBy('id', 'asc')->get();

        return view('subscriber.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriber.products.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->flavor = $request['flavor'];
        $product->order = $request['order'];
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at  =  date('Y-m-d H:i:s');
        $product->save();
        return redirect('/subscriber/products');
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
        $products = Product::findOrFail($id);
        $products->update($request->all());
        session()->flash('updated', 'Updated');
        return redirect('/subscriber/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('/subscriber/products');
    }
    public function updateBatch(Request $request)
    {
//        $flavor_order = [];
            $flavors = [];
//        foreach($request->get('flavor_order') as $key => $value) {
//            $key++;
//            $flavor_order['flavor_order' . $key] = $value; // you can set rules for all the array items
//            DB::table('products')->where('id', $key)->update(['flavor_order' => $flavor_order['flavor_order' . $key]]);
//        }

        // your arrays can be done like this
        foreach($request->get('flavor') as $key   => $value)
        {
            $key++;
            $flavors['flavor'. $key] = $value; // you can set rules for all the array items
            DB::table('products')->where('id', $key)->update(['flavor' => $flavors['flavor'. $key]]);
             echo $flavors['flavor'. $key];

        }
        session()->flash('updated', 'Updated');
        return redirect('/subscriber/products');

//return $flavor_order;
    }
}
