<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Product::paginate(request()->all());    
        //return response()->json(["products"=>$data],1);

        return response()->json(["products"=>Product::All()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product;
        $product->name=$request->txtName;
        $product->offer_price=$request->txtOffer_price;
        $product->manufacturer_id=$request->cmbManufacturerId;
        $product->regular_price=$request->txtRegular_price;
        $product->description=$request->txtDescription;
        if(isset($request->filePhoto)){
           $product->photo=$request->filePhoto;
        }
        $product->category_id=$request->cmbCategoryId;
        $product->section_id=$request->cmbSectionId;
        $product->is_featured=$request->txtIs_featured;
        $product->star=$request->txtStar;
        $product->is_brand=$request->txtIs_brand;
        $product->offer_discount=$request->txtOffer_discount;
        $product->uom_id=$request->cmbUoMId;
        $product->weight=$request->txtWeight;
        $product->barcode=$request->txtBarcode;

        $product->save();
        if(isset($request->filePhoto)){
            $imageName = $product->id.'.'.$request->filePhoto->extension();
            $product->photo=$imageName;
            $product->update();
            $request->filePhoto->move(public_path('img'),$imageName);
        }

        //return response()->json(['success'=>'Saved']);
        return json_encode(['success'=>'Saved']);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
        return json_encode(Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product=Product::find($id);

		$product->name=$request->txtName;
		$product->offer_price=$request->txtOffer_price;
		$product->manufacturer_id=$request->cmbManufacturerId;
		$product->regular_price=$request->txtRegular_price;
		$product->description=$request->txtDescription;
		if(isset($request->filePhoto)){
		    $product->photo=$request->filePhoto;
		}
		$product->category_id=$request->cmbCategoryId;
		$product->section_id=$request->cmbSectionId;
		$product->is_featured=$request->txtIs_featured;
		$product->star=$request->txtStar;
		$product->is_brand=$request->txtIs_brand;
		$product->offer_discount=$request->txtOffer_discount;
		$product->uom_id=$request->cmbUoMId;
		$product->weight=$request->txtWeight;
		$product->barcode=$request->txtBarcode;

		if(isset($request->filePhoto)){
			$imageName = $product->id.'.'.$request->filePhoto->extension();
			$product->photo=$imageName;
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		$product->update();


		return json_encode(["success"=>$request->txtStar,"ID"=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
		return json_encode(["success"=>$id]);
    }
}
