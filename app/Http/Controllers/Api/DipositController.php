<?php

namespace App\Http\Controllers\Api;
use App\Models\Diposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Loanactive;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class DipositController extends Controller
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
        //--show hoi---
        // return response()->json(["diposits"=>Diposit::All()]);

        $diposits=DB::table("loanactives as l")    
        ->join("diposits as d","l.id","=","d.loanactive_id")      
        //  ->join("uoms as u","u.id","=","p.uom_id")          
         ->select("d.id","d.name","l.name as loanactive","d.mobile","d.address","d.principle","d.paid","d.due","d.loanactive_id","d.updated_at","d.created_at")           
         ->paginate(10);

      return response()->json($diposits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $diposit=new Diposit;
        // $diposit->name="shohel ra";
        // $diposit->mobile=019635544345;
        // $diposit->address="Birbanda";
        // $diposit->principle=400;
        // $diposit->paid=20;

      
        // $diposit->due=10;
        // $diposit->loanactive_id=1;
       

        // $diposit->save();

       


       
        $diposit=new Diposit;
        $diposit->name=$request->name;
        $diposit->mobile=$request->mobile;
        $diposit->address=$request->address;
        $diposit->principle=$request->principle;
        $diposit->paid=$request->paid;
      
        $diposit->due=$request->due;
        $diposit->loanactive_id=$request->loanactive_id;
       
        $diposit->save();
      
  
        
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
        return json_encode(Diposit::find($id));
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
        
        $diposit=Diposit::find($id);

		$diposit->name=$request->name;
		$diposit->mobile=$request->mobile;
		$diposit->address=$request->address;
		$diposit->principle=$request->principle;
		$diposit->paid=$request->paid;

		// if(isset($request->photo)){
		//     $product->photo=$request->photo;
		// }

		$diposit->due=$request->due;
		$diposit->loanactive_id=$request->loanactive_id;
        // $product->product_type_id=1;
		// $product->is_featured=$request->is_featured;
		// $product->star=$request->star;
		// $product->is_brand=$request->is_brand;
		// $product->offer_discount=$request->offer_discount;
		// $product->uom_id=$request->uom_id;
		// $product->weight=$request->weight;
		// $product->barcode=$request->barcode;

		// if(isset($request->photo)){
		// 	$imageName = $product->id.'.'.$request->photo->extension();
		// 	$product->photo=$imageName;
		// 	$request->photo->move(public_path('img'),$imageName);
		// }
		$diposit->update();
      

		return json_encode(["success"=>$request->star,"ID"=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diposit::find($id)->delete();
		return json_encode(["success"=>$id]);
    }
}
