<?php

namespace App\Http\Controllers\Api;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
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

        return response()->json(["members"=>Member::All()]);
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


       
        $member=new Member;
        $member->name=$request->name;
        $member->lastname=$request->lastname;
        $member->address=$request->address;
        $member->nid=$request->nid;
       
        $member->photo='';
        if(isset($request->photo)){
           $member->photo=$request->photo->getClientOriginalName();
        }
        $member->deposit=$request->deposit;
        $member->withdraw=$request->withdraw;
        
        $member->total_amount=$request->total_amount;
       

        $member->save();
        if(isset($request->photo)){
            $imageName = $member->id.'.'.$request->photo->extension();
            $member->photo=$imageName;
            $member->update();
            $request->photo->move(public_path('img'),$imageName);
        }
  
       
        // return response()->json(['success'=>'Saved']);
         return json_encode(['save'=>$request->photo->getClientOriginalName()]);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
        return json_encode(Member::find($id));
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
        
        $member=Member::find($id);

        $member->name=$request->name;
        $member->lastname=$request->lastname;
        $member->address=$request->address;
        $member->nid=$request->nid;
		// if(isset($request->photo)){
		//     $member->photo=$request->photo;
		// }

        $member->deposit=$request->deposit;
        $member->withdraw=$request->withdraw;
        
        $member->total_amount=$request->total_amount;
       

		// if(isset($request->photo)){
		// 	$imageName = $member->id.'.'.$request->photo->extension();
		// 	$member->photo=$imageName;
		// 	$request->photo->move(public_path('img'),$imageName);
		// }
		$member->update();
      

        return json_encode(["success"=>$request->star,"ID"=>$id]);
    }

    public function updateMember(Request $request,$id){

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
        Member::find($id)->delete();
		return json_encode(["success"=>$id]);
    }
}
