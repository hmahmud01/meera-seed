<?php

  

namespace App\Http\Controllers;

  

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

  

class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        if(Auth::check()){
            $products = Product::latest()->paginate(5);  
            $categorys = Category::all();

            return view('products.index',compact('products', 'categorys'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');       

    }

    public function homepage()
    {
        $categorys = Category::all();
        $seed = "seed";
        $compost = "compost";
        $equipment = "equipment";
        $commodity = "commodity";

        // $seed_prod = Product::where('category', 'LIKE', '%'.$seed.'%')->get();
        // $compost_prod = Product::where('category', 'LIKE', '%'.$compost.'%')->get();
        // $equipment_prod = Product::where('category', 'LIKE', '%'.$equipment.'%')->get();
        // $commodity_prod = Product::where('category', 'LIKE', '%'.$commodity.'%')->get();

        $seed_prod = Product::all();
        $compost_prod = Product::all();
        $equipment_prod = Product::all();
        $commodity_prod = Product::all();

        return view('index', compact('seed_prod', 'compost_prod', 'equipment_prod', 'commodity_prod', 'categorys'));
        
    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categorys = Category::all();
        return view('products.create', compact('categorys'));

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

            'name' => 'required',

            'subtitle' => 'required',

            'detail' => 'required',

            'bangla' => 'required',

            'category_id' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

    

        Product::create($input);

     

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('products.show',compact('product'));

    }

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('products.edit',compact('product'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Product $product)

    {

        $request->validate([

            'name' => 'required',

            'subtitle' => 'required',

            'detail' => 'required',

            'bangla' => 'required',

            'category' => 'required',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }

          

        $product->update($input);

    

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();

     

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

}