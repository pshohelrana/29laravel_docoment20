<?php

namespace App\Http\Controllers\Api;
use App\Models\Loanactive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Loansystem;
use App\Models\Loanapplicant;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class LoanactiveController extends Controller
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
        // show hoi all----
        // return response()->json(["loanactives"=>Loanactive::All()]);

        $loanactives=DB::table("loansystems as s")    
        ->join("loanactives as a","s.id","=","a.loansystem_id")      
         ->join("loanapplicants as p","p.id","=","a.loanapplicant_id")          
         ->select("a.id","a.name","a.mobile","a.address","s.name as loansystem","a.principle","a.interest_rate","a.emi","a.total_tk","a.photo","a.remark","a.updated_at","a.created_at","p.name as loanapplicant")           
         ->paginate(10);

      return response()->json($loanactives);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $product=new Product;
        $product->name="Apple";
        $product->offer_price=345;
        $product->manufacturer_id=1;
        $product->regular_price=400;
        $product->description="NA";

        if(isset($request->photo)){
           $product->photo=$request->photo;
        }else{
            $product->photo="default.jpg";
        }
        $product->product_category_id=1;
        $product->product_section_id=1;
        $product->product_type_id=1;
        $product->is_featured=0;
        $product->star=5;
        $product->is_brand=1;
        $product->offer_discount=0;
        $product->uom_id=1;
        $product->weight=0;
        $product->barcode=1002;

        $product->save();

        if(isset($request->photo)){
            $imageName = $product->id.'.'.$request->photo->extension();
            $product->photo=$imageName;
            $product->update();
            $request->photo->move(public_path('img'),$imageName);
        }
      */


       
        $loanactive=new Loanactive;
        $loanactive->name=$request->name;
        $loanactive->mobile=$request->mobile;
        $loanactive->address=$request->address;
        $loanactive->loansystem_id=$request->loansystem_id;
        $loanactive->loanapplicant_id=$request->loanapplicant_id;
        $loanactive->principle=$request->principle;
        $loanactive->interest_rate=$request->interest_rate;
        $loanactive->emi=$request->emi;
        $loanactive->total_tk=$request->total_tk;
        $loanactive->remark=$request->remark;
       
        // $loanactive->photo='';
        // if(isset($request->photo)){
        //    $loanactive->photo=$request->photo->getClientOriginalName();
        // }
       
        $loanactive->save();
        // if(isset($request->photo)){
        //     $imageName = $loanactive->id.'.'.$request->photo->extension();
        //     $loanactive->photo=$imageName;
        //     $loanactive->update();
        //     $request->photo->move(public_path('img'),$imageName);
        // }
  
       
         return response()->json(['success'=>'Saved']);
        //  return json_encode(['save'=>$request->photo->getClientOriginalName()]);
  
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
        return json_encode(Loanactive::find($id));
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
        
        $loanactive=Loanactive::find($id);

        $loanactive->name=$request->name;
        $loanactive->mobile=$request->mobile;
        $loanactive->address=$request->address;
        $loanactive->loansystem_id=$request->loansystem_id;
        $loanactive->principle=$request->principle;
        $loanactive->interest_rate=$request->interest_rate;
        $loanactive->emi=$request->emi;
        $loanactive->total_tk=$request->total_tk;
        $loanactive->remark=$request->remark;
        $loanactive->principle=$request->principle;
        // if(isset($request->photo)){
        //    $loanactive->photo=$request->photo;
        // }
       
        $loanactive->save();
        // if(isset($request->photo)){
        //     $imageName = $loanactive->id.'.'.$request->photo->extension();
        //     $loanactive->photo=$imageName;
        //     $loanactive->update();
        //     $request->photo->move(public_path('img'),$imageName);
        // }
		$loanactive->update();
      

		return json_encode(["success"=>$request->star,"ID"=>$id]);
    }
    public function updateLoanactive(Request $request,$id){

        return json_encode(["success"=>$request->photo->getClientOriginalName(),"ID"=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Loanactive::find($id)->delete();
		return json_encode(["success"=>$id]);
    }
}
